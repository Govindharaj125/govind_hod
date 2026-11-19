(function safelyInitMemberUpdate() {
  function ready() {
    const cardNoInput = document.getElementById('searchCardNoInput');
    const nameMobileInput = document.getElementById('searchNameMobileInput');
    const btnPrev = document.getElementById('btnPrev');
    const btnNext = document.getElementById('btnNext');
    const btnLoadMember = document.getElementById('btnLoadMember');
    const idDisplay = document.getElementById('idDisplay');
    const newCardNoDisplay = document.getElementById('newCardNoDisplay');
    const memberForm = document.getElementById('memberForm');
    const memberNameInput = document.getElementById('memberNameInput');
    const mobNoInput = document.getElementById('mobNoInput');
    const addressInput = document.getElementById('addressInput');
    const carolRoundAreaInput = document.getElementById('carolRoundAreaInput');
    const latitudeDisplay = document.getElementById('latitudeDisplay');
    const longitudeDisplay = document.getElementById('longitudeDisplay');
    const mapUrlLink = document.getElementById('mapUrlLink');
    const btnGetLocation = document.getElementById('btnGetLocation');
    const btnSave = document.getElementById('btnSave');
    const msgDiv = document.getElementById('msg');

    if (!cardNoInput || !nameMobileInput || !btnLoadMember) {
      setTimeout(ready, 50);
      return;
    }

    let currentLatitude = null, currentLongitude = null, currentId = null;
    let results = [];
    let currentIndex = -1;

    function updateNavigationButtons() {
      btnPrev.disabled = currentIndex <= 0 || results.length === 0;
      btnNext.disabled = !results.length || currentIndex >= results.length - 1;
      btnPrev.style.visibility = results.length > 1 ? 'visible' : 'hidden';
      btnNext.style.visibility = results.length > 1 ? 'visible' : 'hidden';
    }

    function displayMember(index) {
      if (!results.length || index < 0 || index >= results.length) return;
      currentIndex = index;
      const m = results[currentIndex];
      idDisplay.value = m.id || "";
      newCardNoDisplay.value = m.NewCardNo || "";
      memberNameInput.value = m.MemberName || "";
      mobNoInput.value = m.MobNo || "";
      addressInput.value = m.Address || "";
      carolRoundAreaInput.value = m.CarolRoundArea || "";
      latitudeDisplay.textContent = m.CarolLat || "N/A";
      longitudeDisplay.textContent = m.CarolLng || "N/A";
      currentLatitude = m.CarolLat || null;
      currentLongitude = m.CarolLng || null;
      mapUrlLink.href = m.MapURL && m.MapURL !== "#" ? m.MapURL : "#";
      mapUrlLink.textContent = m.MapURL || "Not set";
      memberForm.style.display = "block";
      currentId = m.id;
      updateNavigationButtons();
    }

    async function loadMemberDetails() {
      const cardNo = cardNoInput.value.trim();
      const nameMobile = nameMobileInput.value.trim();

      let url = "/membermgmt/api/member_update.php?";
      if (cardNo) {
        url += `cardNo=${encodeURIComponent(cardNo)}`;
      } else if (nameMobile) {
        url += `searchNameMobile=${encodeURIComponent(nameMobile)}`;
      } else {
        results = [];
        currentIndex = -1;
        memberForm.style.display = "none";
        updateNavigationButtons();
        return;
      }

      msgDiv.textContent = "";
      try {
        const response = await fetch(url, { credentials: "include" });
        const result = await response.json();
        if (result.success) {
          results = Array.isArray(result.data) ? result.data : [result.data];
          displayMember(0);
        } else {
          results = [];
          currentIndex = -1;
          memberForm.style.display = "none";
          updateNavigationButtons();
        }
      } catch {
        results = [];
        currentIndex = -1;
        memberForm.style.display = "none";
        updateNavigationButtons();
      }
    }

    let debounceTimeout;
    function debounceLoad() {
      if (debounceTimeout) clearTimeout(debounceTimeout);
      debounceTimeout = setTimeout(loadMemberDetails, 250);
    }

    cardNoInput.addEventListener('input', debounceLoad);
    nameMobileInput.addEventListener('input', debounceLoad);
    btnLoadMember.addEventListener('click', loadMemberDetails);
    btnPrev.addEventListener('click', () => {
      if (currentIndex > 0) displayMember(currentIndex - 1);
    });
    btnNext.addEventListener('click', () => {
      if (currentIndex < results.length - 1) displayMember(currentIndex + 1);
    });

    btnGetLocation.addEventListener("click", () => {
      if (!navigator.geolocation) { alert("Geolocation not supported"); return; }
      navigator.geolocation.getCurrentPosition(
        (position) => {
          currentLatitude = position.coords.latitude;
          currentLongitude = position.coords.longitude;
          latitudeDisplay.textContent = currentLatitude;
          longitudeDisplay.textContent = currentLongitude;
          const url = `https://www.google.com/maps?q=${currentLatitude},${currentLongitude}`;
          mapUrlLink.href = url;
          mapUrlLink.textContent = url;
        }, () => { alert("Unable to retrieve your location"); }
      );
    });

    btnSave.addEventListener("click", async () => {
      const memberName = memberNameInput.value.trim(), mobNo = mobNoInput.value.trim(),
        address = addressInput.value.trim(), carolRoundArea = carolRoundAreaInput.value.trim();
      if (!currentId || !memberName) { alert("Member ID and Member Name required"); return; }
      const data = {
        id: currentId,
        NewCardNo: newCardNoDisplay.value.trim(),
        MemberName: memberName,
        MobNo: mobNo,
        Address: address,
        CarolRoundArea: carolRoundArea,
        CarolLat: currentLatitude,
        CarolLng: currentLongitude,
        MapURL: mapUrlLink.href
      };
      try {
        const response = await fetch("/membermgmt/api/member_update.php", {
          method: "PUT",
          credentials: "include",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(data),
        });
        const result = await response.json();
        msgDiv.style.color = result.success ? "green" : "red";
        msgDiv.textContent = result.success ? "Member updated successfully!" : "Failed to update member: " + (result.message || "");
      } catch (error) { alert("Error saving member details"); }
    });
  }

  ready();
})();

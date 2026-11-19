(function safelyInitMemberList() {
  function ready() {
    const searchCardNoInput = document.getElementById('searchCardNoInput');
    const searchNameMobileInput = document.getElementById('searchNameMobileInput');
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

    if (!searchCardNoInput || !searchNameMobileInput || !btnLoadMember) {
      setTimeout(ready, 40);
      return;
    }

    let currentLatitude = null, currentLongitude = null, currentId = null;

    async function loadMemberDetails() {
      const cardNo = searchCardNoInput.value.trim();
      const nameMobile = searchNameMobileInput.value.trim();

      if (!cardNo && !nameMobile) {
        memberForm.style.display = "none";
        msgDiv.textContent = "";
        return;
      }

      let url = '/membermgmt/api/memberdetails.php?';
      if (cardNo) url += `cardNo=${encodeURIComponent(cardNo)}&`;
      if (nameMobile) url += `searchNameMobile=${encodeURIComponent(nameMobile)}`;

      msgDiv.textContent = "";
      try {
        const response = await fetch(url, { credentials: "include" });
        const result = await response.json();
        console.log("Search API result:", result);

        if (result.success && result.data.length > 0) {
          const m = result.data[0];
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
        } else {
          memberForm.style.display = "none";
          msgDiv.textContent = "Member not found.";
          msgDiv.style.color = "red";
        }
      } catch (error) {
        memberForm.style.display = "none";
        msgDiv.textContent = "Error loading member details.";
        msgDiv.style.color = "red";
        console.error("Error fetching member details:", error);
      }
    }

    btnLoadMember.addEventListener('click', loadMemberDetails);

    searchCardNoInput.addEventListener('input', () => {
      clearTimeout(window.debounceTimeout);
      window.debounceTimeout = setTimeout(loadMemberDetails, 280);
    });

    searchNameMobileInput.addEventListener('input', () => {
      clearTimeout(window.debounceTimeout);
      window.debounceTimeout = setTimeout(loadMemberDetails, 280);
    });

    btnGetLocation.addEventListener("click", () => {
      if (!navigator.geolocation) {
        alert("Geolocation not supported");
        return;
      }
      navigator.geolocation.getCurrentPosition(
        (position) => {
          currentLatitude = position.coords.latitude;
          currentLongitude = position.coords.longitude;
          latitudeDisplay.textContent = currentLatitude;
          longitudeDisplay.textContent = currentLongitude;
          const url = `https://www.google.com/maps?q=${currentLatitude},${currentLongitude}`;
          mapUrlLink.href = url;
          mapUrlLink.textContent = url;
        },
        () => {
          alert("Unable to retrieve your location");
        }
      );
    });

    btnSave.addEventListener("click", async () => {
      const memberName = memberNameInput.value.trim(),
        mobNo = mobNoInput.value.trim(),
        address = addressInput.value.trim(),
        carolRoundArea = carolRoundAreaInput.value.trim();
      if (!currentId || !memberName) {
        alert("Member ID and Member Name required");
        return;
      }
      const data = {
        id: currentId,
        NewCardNo: newCardNoDisplay.value.trim(),
        MemberName: memberName,
        MobNo: mobNo,
        Address: address,
        CarolRoundArea: carolRoundArea,
        CarolLat: currentLatitude,
        CarolLng: currentLongitude,
        MapURL: mapUrlLink.href,
      };
      try {
        const response = await fetch("/membermgmt/api/memberdetails.php", {
          method: "PUT",
          credentials: "include",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(data),
        });
        const result = await response.json();
        if (result.success) {
          alert("Member updated successfully!");
        } else {
          alert("Failed to update member: " + (result.message || ""));
        }
      } catch (error) {
        alert("Error saving member details");
        console.error("Error saving member details:", error);
      }
    });

  }
  ready();
})();

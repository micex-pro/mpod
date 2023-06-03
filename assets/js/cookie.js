window.onload = function () {
  let cookieConsentStatus = getCookie("cookiesConsent");
  
  if (cookieConsentStatus == null || cookieConsentStatus[1] != 1)
  {
    createCookieConsent();
    var body = document.getElementsByTagName("body")[0];
    var caMain = document.getElementById("caMain");

    body.style.overflow = "hidden";

    acceptCookie = document.getElementById("caAccept");
    acceptCookie.addEventListener("click", function(){
      document.cookie = "cookiesConsent=1";
      body.style.overflow = "visible";
      caMain.style.display = "none";
    });
  }
};

function setCookie(name, value, days) {
  // START validation of cookieConsent
  let cookieConsentStatus = getCookie("cookiesConsent");
  if (cookieConsentStatus == null)
  {
    console.log("[-] Client didn't accept cookies");
  }else if (cookieConsentStatus[1] == 1){
    var expires = "";
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
      expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
  }else{
    console.log("[-] Client didn't accept cookies");
  }
  // END validation of cookieConsent
}

function getCookie(name) {
  var tempList = document.cookie.split(";");
  const cookiesList = tempList.reduce((result, item) => {
    const [key, value] = item.trim().split("=");
    result[key] = value;
    return result;
  }, {});

  for (const key in cookiesList) {
    if (key == name) {
      return [key, cookiesList[key]];      
    }
  }
  return null;
}

// function acceptCookies() {
//   setCookie("cookieConsent", "true", 365);
//   document.getElementById("cookieConsent").style.display = "none";
// }


function createCookieConsent(){
  body = document.getElementsByTagName("body");

  caMain = document.createElement("div");
  caMain.id = "caMain";
  caMain.classList.add("ca-main");
  body[0].insertBefore(caMain, body[0].firstChild);
  
  caContent = document.createElement("div");
  caContent.classList.add("ca-content");
  caMain.append(caContent);
  
  caMessage = document.createElement("h5");
  caMessage.classList.add("ca-message");
  caMessage.innerHTML = "Cookies and privacy policy.";
  caContent.append(caMessage);
  
  paragraph = document.createElement("p");
  paragraph.innerHTML = 'We use cookies to give you the best online experience. Please let us know if you agree to all of our <a href="./cookies-policy.html">cookies policy</a> and our <a href="./privacy-policy.html">privacy policy</a>.';
  caContent.append(paragraph);

  caButtons = document.createElement("div");
  caButtons.classList.add("ca-buttons");
  caContent.append(caButtons);

  caAccept = document.createElement("button");
  caAccept.classList.add("btn");
  caAccept.id = "caAccept";
  caAccept.innerHTML = "Accept Cookies";
  caButtons.append(caAccept);

  caSettings = document.createElement("button");
  caSettings.classList.add("btn");
  caSettings.classList.add("btn-hollow");
  caSettings.id = "caSettings";
  caSettings.innerHTML = "Cookies Settings";
  caButtons.append(caSettings);
}
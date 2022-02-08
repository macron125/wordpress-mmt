class Navigation {
  body = document.body;

  constructor(btn) {
    this.btn = btn;
  }

  listenClick() {
    this.btn.addEventListener("click", () => {
      this.body.classList.toggle("open");
      this.fixbody(this.body);
    });
  }

  fixbody(body) {
    body.classList.contains("open")
      ? (body.style.overflow = "hidden")
      : body.style.removeProperty("overflow");
  }
}

class GeneratePageNav {
  constructor(headers, navList) {
    this.headers = document.querySelectorAll(headers);
    this.navList = document.querySelector(navList);
  }

  launch() {
    this.setAnchors();
    this.createPageNav();
  }

  getHeaders() {
    let headerTitles = [];
    for (let title of this.headers) {
      headerTitles.push(title.textContent);
    }
    return headerTitles;
  }

  setAnchors() {
    for (let header of this.headers) {
      let anchor = document.createElement("a");
      let title = header.textContent;
      anchor.id = `${title.replace(/ /g, "").toLowerCase()}`;
      anchor.classList.add("mmt-blog-anchor");
      anchor.href = `#${title.replace(/ /g, "").toLowerCase()}`;
      anchor.textContent = title;
      header.innerHTML = "";
      header.append(anchor);
    }
  }

  createPageNav() {
    for (let header of this.getHeaders()) {
      let anchor = document.createElement("a");
      anchor.href = `#${header.replace(/ /g, "").toLowerCase()}`;
      anchor.textContent = header;
      let pageNavLi = document.createElement("li");
      pageNavLi.className = "mmt-page-nav-list-item";
      pageNavLi.append(anchor);
      // Check if the navigation section is appended
      if (this.navList != null) {
        this.navList.append(pageNavLi);
      }
    }
  }
}

class Scroll {
  constructor(button) {
    this.btt = button;
  }

  launch(height, bool) {
    if (
      document.documentElement.clientHeight * height <
      document.documentElement.scrollHeight
    ) {
      window.addEventListener("scroll", () => {
        window.scrollY >= document.documentElement.clientHeight * height
          ? this.btt.classList.add("visible")
          : this.btt.classList.remove("visible");
      });
    }
    this.scrollToTop(bool);
  }

  scrollToTop(bool) {
    if (bool) {
      this.btt.addEventListener("click", () => {
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    }
  }
}

document.addEventListener("DOMContentLoaded", () => {
  // Check current page and add "active" class
  async function checkCurrentPage() {
    let gnItems = document.querySelectorAll(".mmt-gn-list-item a");
    for (let gnItem of gnItems) {
      gnItem.href == window.location.href ? gnItem.classList.add("active") : "";
    }
  }

  checkCurrentPage();

  let backToTop = new Scroll(document.querySelector(".mmt-btt-container"));
  backToTop.launch(2, true);
  let contactUsBtn = new Scroll(document.querySelector(".mmt-bav-container"));
  contactUsBtn.launch(0.5, false);

  let generatePageNav = new GeneratePageNav(
    ".module-blog h2",
    ".mmt-page-nav-list"
  );
  generatePageNav.launch();

  let nav = new Navigation(document.querySelector(".mmt-ham"));
  nav.listenClick();

  // async function changeVidBannerBackground() {
  //   if (document.documentElement.clientWidth <= 768) {
  //     let vid = document.querySelector("video");
  //     let poster = document.querySelector(".mmt-hero-banner-poster");
  //     vid.hidden = true;
  //     poster.hidden = false;
  //   }
  // }

  // changeVidBannerBackground();
});
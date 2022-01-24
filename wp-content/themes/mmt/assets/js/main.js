document.addEventListener("DOMContentLoaded", () => {
  let gnItems = document.querySelectorAll(".mmt-gn-list-item a");
  for (let gnItem of gnItems) {
    gnItem.href == window.location.href ? gnItem.classList.add("active") : "";
  }

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

  let nav = new Navigation(document.querySelector(".mmt-ham"));

  nav.listenClick();

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
        anchor.classList.add('mmt-blog-anchor');
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
        this.navList.append(pageNavLi);
      }
    }
  }

  let generatePageNav = new GeneratePageNav(
    ".module-blog h2",
    ".mmt-page-nav-list"
  );
  generatePageNav.launch();

  let btt = document.querySelector(".mmt-btt-container");

  if (
    document.documentElement.clientHeight * 2 <
    document.documentElement.scrollHeight
  ) {
    window.addEventListener("scroll", () => {
      window.scrollY >= document.documentElement.clientHeight * 2
        ? btt.classList.add("visible")
        : btt.classList.remove("visible");
    });
  }
});

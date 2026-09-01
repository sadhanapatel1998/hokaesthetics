/* =========================================================
   SERVICES MEGA DROPDOWN — SCOPED JAVASCRIPT
   Vanilla JS, no dependencies. Paste this right before your
   closing </body> tag (after your other scripts).
   All variables/functions are wrapped in an IIFE so nothing
   here can collide with your existing header JS.
========================================================= */

(function () {
  var svcData = {
    "skin-aesthetics": {
      title: "Skin Aesthetics",
      subs: [
        "Laser Skin Treatments",
        "Wrinkle & Lines Treatments",
        "Pigmentation Problems",
        "Acne & Scar Treatments",
        "Anti Ageing Treatments",
        "Botox & Fillers",
      ],
    },
    "hair-restoration": {
      title: "Hair Restoration",
      subs: [
        "Medical Hair Management",
        "Non Surgical Hair Loss Management",
        "Hair Transplant",
        "Scalp Micro Pigmentation",
        "Beard and Eyebrow Restoration",
      ],
    },
    "laser-treatments": {
      title: "Laser Treatments",
      subs: [
        "Hair Removal",
        "Acne Treatment",
        "Acne Scar Reduction",
        "Scar Removal",
        "Tattoo Removal",
        "Pigmentation Treatment",
        "Vascular Lesion Treatment",
        "Stretch Mark Reduction",
        "Skin Rejuvenation",
        "Pore Refinement",
        "Melasma Treatment",
        "Photo Facial",
      ],
    },
    injectables: {
      title: "Injectables",
      subs: [
        "Botox",
        "Dermal Fillers",
        "Chin & Jawline Contouring",
        "Lip Enhancement",
        "Cheek Volumizing",
        "Brow Lift",
        "Under Eye Rejuvenation",
        "Neck Rejuvenation",
      ],
    },
    "weight-loss-management": {
      title: "Weight Loss Management",
      subs: [
        "Medical Weight Loss Program",
        "Fat Loss Treatments",
        "Metabolism Enhancement",
        "Nutrition and Lifestyle Guidance",
        "Anti Obesity Pharmacotherapy",
        "Weight Maintenance Program",
      ],
    },
    "advance-facial": {
      title: "Advance Facial",
      subs: [
        "Skin Glow and Brightness",
        "Hydra Facials",
        "Carbon Laser Facials",
        "Korean Glass Facial",
        "Fire and Ice Facial",
        "Acne and Pore Facial",
        "Vampire Facial",
        "Medical Derma Facial",
      ],
    },
    "permanent-makeup": {
      title: "Permanent Makeup",
      subs: [
        "Microblading",
        "Powder Brows",
        "Lip Blush",
        "Ombre Brows",
        "Eyeliner",
        "Lip Liner",
        "Scalp Micropigmentation",
        "Lash Line Enhancement",
        "Beauty Marks",
        "Scar Camouflage",
      ],
    },
    // "medical-cosmetology": {
    //   title: "Medical Cosmetology",
    //   subs: [
    //     "Skin Boosters",
    //     "Mesotherapy",
    //     "Vitamin Infusion Therapy",
    //     "Collagen Induction Therapy",
    //     "Skin Rejuvenation",
    //   ],
    // },
    "gynaecology-aesthetics": {
      title: "Gynaecology Aesthetics",
      subs: [
        "Intimate Skin Aesthetics",
        "Intimate Laser Treatments",
        "Vaginal Tightening",
        "Vaginal Dryness Treatment",
        "Urinary Leakage Management",
        "Intimate Injectable and PRP",
      ],
    },
    "dental-aesthetics": {
      title: "Dental Aesthetics",
      subs: [
        "Teeth Whitening",
        "Gummy Smile Treatment",
        "Aesthetic Crown and Bridges",
        "Dental Implants",
        "Veneer and Cosmetic Bonding",
        "Invisalign and Clear Aligners",
        "Smile Makeover",
        "Root Canal Treatment",
      ],
    },
  };

  // ---- Turns a service/sub-service name into a URL-safe slug,
  // e.g. "PRP / PRF Therapy" -> "prp-prf-therapy"
function svcSlugify(text) {
  return text
    .toLowerCase()
    .replace(/\s*&\s*/g, " ")      // & remove
    .replace(/\band\b/g, " ")      // "and" word remove
    .replace(/[^a-z0-9]+/g, "-")
    .replace(/-+/g, "-")
    .replace(/^-|-$/g, "");
}

  var svcServicesCols = document.getElementById("svcServicesCols");
  var svcExplorePanel = document.getElementById("svcExplorePanel");
  var svcMegaPanel = document.getElementById("svcMegaPanel");
  var svcMobileAccordion = document.getElementById("svcMobileAccordion");

  function svcRenderExplore(serviceId) {
    var data = svcData[serviceId];
    if (!data || !svcExplorePanel) return;

    var listHtml = data.subs
      .map(function (s) {
        var href = "./" + svcSlugify(s) + ".php";
        return (
          '<li><a href="' +
          href +
          '" class="svc-explore-link">' +
          s +
          "</a></li>"
        );
      })
      .join("");
    svcExplorePanel.innerHTML =
      '<p class="svc-explore-title">' +
      data.title +
      "</p>" +
      '<p class="svc-explore-subtitle">Related treatments</p>' +
      '<ul class="svc-explore-list">' +
      listHtml +
      "</ul>" +
      '<a href="all-services.php" class="svc-explore-btn"> View All Services <i class="fas fa-arrow-right"></i></a>';
    // '<a href="#" class="svc-explore-btn">VIEW ALL ' + data.title.toUpperCase() + ' SERVICES <i class="fas fa-arrow-right"></i></a>';

    svcExplorePanel.classList.remove("svc-explore-fade");
    void svcExplorePanel.offsetWidth; // restart animation
    svcExplorePanel.classList.add("svc-explore-fade");
  }

  if (svcServicesCols) {
    svcServicesCols.addEventListener("click", function (e) {
      var row = e.target.closest(".svc-service-row");
      if (!row || !svcServicesCols.contains(row)) return;
      e.preventDefault();

      svcServicesCols
        .querySelectorAll(".svc-service-row")
        .forEach(function (el) {
          el.classList.remove("svc-service-active");
        });
      row.classList.add("svc-service-active");

      svcRenderExplore(row.getAttribute("data-svc-service"));
    });
  }

  // ---- Mobile-only: build a simple dropdown + sub-dropdown accordion.
  // Every main service AND every sub-service is a real <a> tag.
  function svcBuildMobileAccordion() {
    if (!svcMobileAccordion) return;

    var html = "";
    Object.keys(svcData).forEach(function (id) {
      var d = svcData[id];
      var subLinksHtml = d.subs
        .map(function (s) {
          var href = "./" + svcSlugify(s) + ".php";
          return (
            '<a href="' + href + '" class="svc-mobile-sublink">' + s + "</a>"
          );
        })
        .join("");

      html +=
        '<div class="svc-mobile-item" data-svc-mobile-id="' +
        id +
        '">' +
        '<a href="./' +
        id +
        '.php" class="svc-mobile-link">' +
        "<span>" +
        d.title +
        "</span>" +
        '<i class="fas fa-chevron-right svc-mobile-chevron"></i>' +
        "</a>" +
        '<div class="svc-mobile-submenu">' +
        subLinksHtml +
        "</div>" +
        "</div>";
    });

    svcMobileAccordion.innerHTML = html;
  }
  svcBuildMobileAccordion();

  if (svcMobileAccordion) {
    svcMobileAccordion.addEventListener("click", function (e) {
      // sub-service links: let them behave as normal <a> tags, just don't
      // let the click bubble up and re-toggle the parent accordion item
      var subLink = e.target.closest(".svc-mobile-sublink");
      if (subLink) {
        e.stopPropagation();
        return;
      }

      var link = e.target.closest(".svc-mobile-link");
      if (!link) return;
      e.preventDefault();

      var item = link.closest(".svc-mobile-item");
      var submenu = item.querySelector(".svc-mobile-submenu");
      var isOpen = item.classList.contains("svc-mobile-open");

      // accordion behavior: close any other open item first
      svcMobileAccordion
        .querySelectorAll(".svc-mobile-item")
        .forEach(function (el) {
          el.classList.remove("svc-mobile-open");
          el.querySelector(".svc-mobile-submenu").style.maxHeight = null;
        });

      if (!isOpen) {
        item.classList.add("svc-mobile-open");
        submenu.style.maxHeight = submenu.scrollHeight + "px";
      }
    });
  }

  // mobile/tablet: toggle the whole mega panel on click since hover doesn't apply
  var svcTrigger = document.querySelector(".svc-menu-link");
  if (svcTrigger && svcMegaPanel) {
    svcTrigger.addEventListener("click", function (e) {
      if (window.innerWidth <= 1199) {
        e.preventDefault();
        svcMegaPanel.classList.toggle("svc-panel-open");
      }
    });
    document.addEventListener("click", function (e) {
      if (window.innerWidth > 1199) return;
      if (
        !svcMegaPanel.contains(e.target) &&
        e.target !== svcTrigger &&
        !svcTrigger.contains(e.target)
      ) {
        svcMegaPanel.classList.remove("svc-panel-open");
      }
    });
  }

  // initial state: first service (Skin Aesthetics) selected by default
  svcRenderExplore("skin-aesthetics");
})();

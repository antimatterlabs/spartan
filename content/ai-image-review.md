# AI-Looking Image Review

This is a replacement-planning inventory. AI-generated service-card replacements added during the revision work are recorded here so they can eventually be replaced with approved real Spartan photography.

## Review guidance

- **High:** hero, navigation, or repeated brand-defining imagery; review first.
- **Medium:** prominent page sections and repeated cards.
- **Low:** secondary cards, articles, or specialist pages.
- `partials/data.php` is shared data: an image referenced there can appear on a live route even when that route does not contain the asset path directly.

### Shared-data route coverage

The shared-data references used in the table expand to these live page families. This expansion is part of each row's live-reference list:

- **Shared product data:** `products.php`, `product-single.php`, and product results in `search.php`. The seeded `marine-rigging.webp` and `marine-footwear.webp` records also appear in `cart.php`'s prototype cart.
- **Shared service data:** the first six records on `index.php`, service results in `search.php`, and the related-service list on `service-single.php`.
- **Shared location data:** location cards on `locations.php` and location content on `location-single.php`. Other location-data consumers render addresses or links, not these images.
- **Blog data:** article cards on `index.php` and `blog.php`, plus the requested article and related cards on `blog-single.php`.

## Live referenced assets

| Asset | Live references | Priority | Suggested replacement brief |
| --- | --- | --- | --- |
| `assets/images/hero-upscale.jpg` | `index.php` homepage hero | High | Commission an authentic Spartan waterfront hero with a real employee, vessel, recognizable PPE, and generous copy space. |
| `assets/images/home-flextech-gloves-in-use-v2.webp` | `index.php` homepage department carousel | Medium | Replace with approved lifestyle photography showing the stocked FlexTech glove model being fitted or used in an authentic marine work setting. |
| `assets/images/home-fierce-boots-display.webp` | `index.php` homepage department carousel | Medium | Replace with an approved in-store product photograph of the current Fierce boot model on a Spartan display fixture. |
| `assets/images/j9/spartan-storefront-exterior.webp` | `about.php`, `locations.php`, `location-single.php`, shared location data | High | Photograph actual Spartan storefronts; capture one clean horizontal exterior per active location. |
| `assets/images/j9/spartan-store-interior.webp` | `brands.php`, `contact.php`, `faq.php`, `search.php`, shared location data | High | Photograph an active Spartan sales floor with real inventory, signage, and staff context. |
| `assets/images/j9/spartan-warehouse-fulfillment.webp` | `about.php`, `brands.php`, `cart.php`, `index.php`, `products.php`, `rental-equipment.php`, `training-courses.php`, `location-single.php`, shared product/location data | High | Photograph real order picking, stocked shelves, branch pickup, or warehouse staging. |
| `assets/images/j9/marine-safety.webp` | `index.php`, `rental-equipment.php`, `inspection-services.php`, `service-single.php`, `product-single.php`, `location-single.php`, blog data, shared product/service/location data | High | Photograph Spartan's actual liferafts, suits, PFDs, beacons, and safety stock in shop or aboard a vessel. |
| `assets/images/j9/life-raft-inspection.webp` | `service-single.php`, `product-single.php`, shared service/location data | High | Document a real Spartan technician performing a liferaft inspection in the service center. |
| `assets/images/j9/life-raft-service-inspection.webp` | `inspection-services.php`, `rental-equipment.php` | Medium | Photograph a real Spartan technician inspecting an inflated liferaft in the service center, including the canopy, chambers, valves, lines, and emergency pack. |
| `assets/images/j9/immersion-suit-testing.webp` | `inspection-services.php`, `product-single.php`, shared service data | High | Document real immersion-suit pressure or seam testing with visible Spartan facility context. |
| `assets/images/j9/epirb-plb-inspection.webp` | `inspection-services.php` | Medium | Photograph a Spartan technician testing actual supported EPIRB and PLB models at an electronics service bench. |
| `assets/images/j9/jasons-cradle-mob-inspection.webp` | `inspection-services.php` | Medium | Photograph an approved modern Jason's Cradle unit during a genuine inspection, with the articulated scoop and connection hardware clearly visible. |
| `assets/images/j9/distress-signal-pyrotechnic-inspection.webp` | `inspection-services.php` | Medium | Photograph a controlled inspection of sealed, supported distress-signal products without activating any pyrotechnics. |
| `assets/images/j9/rescue-boat-inspection.webp` | `inspection-services.php` | Medium | Photograph a supported rescue boat inspection focusing on the actual hull, outboard, controls, lifting points, or onboard safety equipment. |
| `assets/images/j9/commercial-fishing.webp` | `index.php`, `location-single.php`, blog data, shared product/location data | Medium | Use authentic Atlantic commercial fishing operations featuring the gear Spartan actually supplies. |
| `assets/images/j9/department-commercial-fishing.webp` | Shared location/category data | Medium | Photograph a real trap-gear, netting, or commercial fishing department display. |
| `assets/images/j9/department-workwear.webp` | `index.php`, `location-single.php`, shared product/location data | Medium | Photograph real foul-weather clothing on staff/customers or a well-merchandised Spartan workwear section. |
| `assets/images/j9/spartan-workwear-woman.webp` | `index.php`, `partials/header.php`, shared product data | High | Arrange a branded Fierce Workwear shoot using approved products, correct logos, and practical marine settings. |
| `assets/images/j9/marine-footwear.webp` | `index.php`, `cart.php`, shared product data | Medium | Shoot the actual boots on a clean product set and in authentic wet-deck use. |
| `assets/images/j9/marine-rigging.webp` | `index.php`, `blog.php`, `cart.php`, `training-courses.php`, `location-single.php`, `partials/header.php`, shared product/location data | High | Photograph Spartan rope, wire, hooks, and rigging assemblies in the shop and in legitimate working use. |
| `assets/images/j9/department-industrial-shipyard.webp` | `index.php` | Medium | Use licensed or client-owned shipyard photography showing the correct work and PPE. |
| `assets/images/home-safety-training-worker.webp` | `index.php` | Medium | Replace with approved Spartan or Hercules Training Academy photography showing the correct course, equipment, and PPE. |
| `assets/images/j9/other-buoys-floats.webp` | `index.php`, shared product data | Medium | Photograph current buoy and float inventory as a clean product grouping or aboard a working vessel. |
| `assets/images/j9/other-industrial-safety.webp` | `training-courses.php` | Low | Capture the actual training equipment and classroom/practical setting for each course. |
| `assets/images/j9/other-marine-life-safety.webp` | `rental-equipment.php`, shared product/service data | High | Shoot the exact EPIRB, PLB, PFD, or rescue-device products being described rather than a generic safety scene. |
| `assets/images/j9/other-trawling-gear.webp` | Shared product data | Low | Replace with an approved product photo tied to the current catalogue item; do not reuse Trawlmaster imagery. |
| `assets/images/j9/lifting-material-handling.webp` | `training-courses.php` | Low | Photograph real course equipment and instructor-led material handling practice. |
| `assets/images/j9/service-compliance.webp` | `certtracker.php`, `inspection-services.php`, `terms.php`, `location-single.php`, blog data, shared location data | High | Use a real inspection record workflow, technician documentation, or a privacy-safe CertTracker screen. |
| `assets/images/j9/service-fleet-outfitting.webp` | `locations.php`, shared service data | Medium | Photograph a real vessel outfitting, branch order, or service-intake handoff. |
| `assets/images/j9/service-pull-testing.webp` | `inspection-services.php`, `training-courses.php`, shared location data | Medium | Document actual davit-hook or supported inspection work; avoid depicting unapproved lifting claims. |
| `assets/images/j9/service-splicing.webp` | `training-courses.php` | Low | Photograph real rope or wire splicing instruction using the correct tools and PPE. |
| `assets/images/j9/spartan-service-workshop.webp` | `training-courses.php` | Medium | Photograph the actual Spartan workshop and technicians without staging unsupported services. |
| `assets/images/training/training-overhead-crane-rigging.webp` | `training-courses.php` | Medium | Photograph an actual instructor-led overhead-crane rigging exercise with approved training equipment and PPE. |
| `assets/images/training/training-overhead-crane-operator.webp` | `training-courses.php` | Medium | Photograph an actual overhead-crane operator course with the supported crane, pendant controls, test load, and instructor. |
| `assets/images/training/training-mobile-elevated-work-platform.webp` | `training-courses.php` | Medium | Photograph an actual MEWP course using the supported platform model, approved harness setup, and instructor. |
| `assets/images/training/training-telehandler-operator.webp` | `training-courses.php` | Medium | Photograph an actual telehandler course in a controlled yard with the supported machine and spotter procedure. |
| `assets/images/training/training-system-scaffolding.webp` | `training-courses.php` | Medium | Photograph the training academy's system-scaffold equipment during a supervised assembly or inspection exercise. |
| `assets/images/training/training-whmis.webp` | `training-courses.php` | Medium | Photograph a real WHMIS exercise with approved containers, labels, safety data sheets, PPE, and instructor context. |
| `assets/images/training/training-lockout-tagout.webp` | `training-courses.php` | Medium | Photograph a real lockout/tagout demonstration using approved isolation equipment and course materials. |
| `assets/images/training/training-confined-space-v2.webp` | `training-courses.php` | Medium | Photograph an actual confined-space practical exercise with the academy's tripod, monitor, ventilation, and retrieval system. |
| `assets/images/training/training-fall-protection.webp` | `training-courses.php` | Medium | Photograph a real fall-protection course focused on harness fitting, inspection, anchors, and lanyards. |
| `assets/images/training/training-fall-rescue-systems.webp` | `training-courses.php` | Medium | Photograph a controlled fall-rescue exercise using the academy's tower, rescue kit, and training mannequin. |
| `assets/images/training/training-chainsaw-safety.webp` | `training-courses.php` | Medium | Photograph an actual chainsaw course in a controlled practice area with correct PPE and instructor supervision. |
| `assets/images/spartan-dock-worker.png` | `inspection-services.php` | Medium | Replace with an authentic service-intake or branch drop-off photograph; the current page no longer advertises dockside service. |

## Unused candidates to verify before future use

The remaining files in `assets/images/j9/` and the `spartan-*.png` waterfront series are not currently referenced by a live PHP template. They should still be treated as unapproved until their source and usage rights are confirmed:

- `assets/images/j9/other-cabin-navigation.webp`
- `assets/images/j9/other-military-coast-guard.webp`
- `assets/images/j9/other-pumps-plumbing.webp`
- `assets/images/j9/other-scallop-fishing.webp`
- `assets/images/j9/spartan-homepage-hero.webp`
- `assets/images/boat-workers.png`
- `assets/images/spartan-at-sea.png`
- `assets/images/spartan-dock-office.png`
- `assets/images/spartan-dock.png`
- `assets/images/spartan-office.png`

## Replacement intake checklist

For each replacement, record the photographer/source, usage rights, location, people pictured, product/brand shown, capture date, and approved alt text. Prioritize real Spartan facilities, employees, products, and customers who have granted permission.

<?php

$currentPage = basename($_SERVER['PHP_SELF']);

/*
|--------------------------------------------------------------------------
| PAGE SEO DATA - GARG ENTERPRISES
|--------------------------------------------------------------------------
*/

$seoData = [

/* HOME */
"index.php" => [
    "title" => "HOK Aesthetics | Advanced Skin, Hair & Cosmetic Clinic",
    "description" => "HOK Aesthetics offers advanced skin, hair restoration, laser treatments, injectables, body contouring, dental aesthetics, and cosmetic procedures with personalized care.",
    "keywords" => "HOK Aesthetics, skin clinic, hair restoration, laser treatments, cosmetic clinic, aesthetic treatments",
    "canonical" => "",
    "robots" => "index, follow"
],

/* ABOUT */
"about-us.php" => [
    "title" => "About HOK Aesthetics | Expert Aesthetic Care",
    "description" => "Learn about HOK Aesthetics, our expert doctors, advanced technology, personalized treatments, and commitment to safe, natural-looking aesthetic results.",
    "keywords" => "about HOK Aesthetics, aesthetic clinic, cosmetic experts, skin and hair clinic",
    "canonical" => "",
    "robots" => "index, follow"
],

/* ALL SERVICES */
"all-services.php" => [
    "title" => "All Aesthetic Services | HOK Aesthetics",
    "description" => "Explore all HOK Aesthetics services including skin treatments, hair restoration, laser procedures, injectables, facial rejuvenation, dental aesthetics, and more.",
    "keywords" => "aesthetic services, skin treatments, laser treatments, injectables, facial rejuvenation",
    "canonical" => "",
    "robots" => "index, follow"
],

/* BLOGS */
"blogs.php" => [
    "title" => "Beauty & Skincare Blog | HOK Aesthetics",
    "description" => "Read expert articles on skincare, hair care, laser treatments, anti-aging, aesthetic procedures, and beauty tips from HOK Aesthetics.",
    "keywords" => "beauty blog, skincare blog, hair care blog, laser treatment tips, HOK Aesthetics",
    "canonical" => "",
    "robots" => "index, follow"
],

/* CONTACT */
"contact-us.php" => [
    "title" => "Contact HOK Aesthetics | Book Your Consultation",
    "description" => "Contact HOK Aesthetics to book a consultation for skin, hair, laser, cosmetic, and aesthetic treatments with our expert team.",
    "keywords" => "contact HOK Aesthetics, aesthetic consultation, skin clinic contact, cosmetic clinic",
    "canonical" => "",
    "robots" => "index, follow"
],

/* DR. KOMAL MEHTA */
"dr-komal-mehta.php" => [
    "title" => "Dr. Komal Mehta | Director & Lead Aesthetic Physician",
    "description" => "Meet Dr. Komal Mehta, Director & Lead Aesthetic Physician at HOK Aesthetics, specializing in advanced aesthetic and cosmetic treatments.",
    "keywords" => "Dr Komal Mehta, aesthetic physician, cosmetic doctor, HOK Aesthetics",
    "canonical" => "",
    "robots" => "index, follow"
],

/* DR. MONIKA GARG */
"dr-monika-garg.php" => [
    "title" => "Dr. Monika Garg | Dental Aesthetics Expert",
    "description" => "Meet Dr. Monika Garg at HOK Aesthetics for advanced dental aesthetics, smile makeovers, veneers, implants, and cosmetic dental treatments.",
    "keywords" => "Dr Monika Garg, dental aesthetics, smile makeover, cosmetic dentist",
    "canonical" => "",
    "robots" => "index, follow"
],

/* GALLERY */
"gallery.php" => [
    "title" => "Gallery | HOK Aesthetics Clinic",
    "description" => "Browse the HOK Aesthetics gallery featuring our clinic, advanced technology, aesthetic treatments, and patient care environment.",
    "keywords" => "HOK Aesthetics gallery, clinic gallery, aesthetic treatments",
    "canonical" => "",
    "robots" => "index, follow"
],

/*
|--------------------------------------------------------------------------
| Skin Aesthetics
|--------------------------------------------------------------------------
*/

/* LASER SKIN TREATMENTS */
"laser-skin-treatments.php" => [
    "title" => "Laser Skin Treatments | HOK Aesthetics",
    "description" => "Advanced laser skin treatments for smoother, healthier-looking skin with personalized care and modern technology at HOK Aesthetics.",
    "keywords" => "laser skin treatments, skin laser clinic, laser facial treatment, HOK Aesthetics",
    "canonical" => "",
    "robots" => "index, follow"
],

/* WRINKLE & LINES TREATMENTS */
"wrinkle-lines-treatments.php" => [
    "title" => "Wrinkle & Lines Treatments | HOK Aesthetics",
    "description" => "Reduce fine lines and wrinkles with advanced anti-ageing treatments designed to restore smoother, youthful-looking skin.",
    "keywords" => "wrinkle treatment, fine lines treatment, anti ageing treatments, youthful skin",
    "canonical" => "",
    "robots" => "index, follow"
],

/* PIGMENTATION PROBLEMS */
"pigmentation-problems.php" => [
    "title" => "Pigmentation Problems Treatment | HOK Aesthetics",
    "description" => "Treat pigmentation concerns, dark spots, uneven skin tone, and melasma with personalized skin solutions at HOK Aesthetics.",
    "keywords" => "pigmentation treatment, dark spots, uneven skin tone, melasma treatment",
    "canonical" => "",
    "robots" => "index, follow"
],

/* ACNE & SCAR TREATMENTS */
"acne-scar-treatments.php" => [
    "title" => "Acne & Scar Treatments | HOK Aesthetics",
    "description" => "Effective acne and scar treatments that help improve skin texture, reduce blemishes, and restore healthy-looking skin.",
    "keywords" => "acne treatment, acne scar treatment, scar reduction, clear skin",
    "canonical" => "",
    "robots" => "index, follow"
],

/* ANTI AGEING TREATMENTS */
"anti-ageing-treatments.php" => [
    "title" => "Anti Ageing Treatments | HOK Aesthetics",
    "description" => "Advanced anti-ageing treatments to reduce wrinkles, improve skin firmness, and achieve naturally youthful-looking skin.",
    "keywords" => "anti ageing treatments, wrinkle reduction, skin tightening, youthful skin",
    "canonical" => "",
    "robots" => "index, follow"
],

/* BOTOX & FILLERS */
"botox-fillers.php" => [
    "title" => "Botox & Fillers | HOK Aesthetics",
    "description" => "Botox and dermal filler treatments for facial rejuvenation, wrinkle reduction, and natural-looking facial enhancement.",
    "keywords" => "Botox, dermal fillers, facial rejuvenation, lip fillers, wrinkle treatment",
    "canonical" => "",
    "robots" => "index, follow"
],

/*
|--------------------------------------------------------------------------
| Hair Restoration 
|--------------------------------------------------------------------------
*/

/* MEDICAL HAIR MANAGEMENT */
"medical-hair-management.php" => [
    "title" => "Medical Hair Management | HOK Aesthetics",
    "description" => "Personalized medical hair management treatments for hair fall, scalp health, and stronger, healthier hair growth.",
    "keywords" => "medical hair management, hair fall treatment, scalp health, hair growth treatment",
    "canonical" => "",
    "robots" => "index, follow"
],

/* NON SURGICAL HAIR LOSS MANAGEMENT */
"non-surgical-hair-loss-management.php" => [
    "title" => "Non Surgical Hair Loss Management | HOK Aesthetics",
    "description" => "Treat hair loss with advanced non-surgical solutions including PRP, GFC Therapy, and customized hair restoration plans.",
    "keywords" => "non surgical hair loss treatment, PRP hair, GFC Therapy, hair restoration",
    "canonical" => "",
    "robots" => "index, follow"
],

/* HAIR TRANSPLANT */
"hair-transplant.php" => [
    "title" => "Hair Transplant | HOK Aesthetics",
    "description" => "Natural-looking hair transplant solutions designed to restore hair density with advanced techniques and personalized care.",
    "keywords" => "hair transplant, FUE hair transplant, natural hairline, hair restoration",
    "canonical" => "",
    "robots" => "index, follow"
],

/* SCALP MICRO PIGMENTATION */
"scalp-micro-pigmentation.php" => [
    "title" => "Scalp Micro Pigmentation | HOK Aesthetics",
    "description" => "Scalp Micro Pigmentation creates the appearance of fuller hair with a natural-looking scalp density enhancement treatment.",
    "keywords" => "scalp micro pigmentation, SMP treatment, scalp density, hair tattoo",
    "canonical" => "",
    "robots" => "index, follow"
],

/* BEARD & EYEBROW RESTORATION */
"beard-eyebrow-restoration.php" => [
    "title" => "Beard & Eyebrow Restoration | HOK Aesthetics",
    "description" => "Restore fuller beards and naturally defined eyebrows with advanced beard and eyebrow restoration treatments.",
    "keywords" => "beard restoration, eyebrow restoration, beard hair transplant, eyebrow enhancement",
    "canonical" => "",
    "robots" => "index, follow"
],
/*
|--------------------------------------------------------------------------
|Laser Treatments
|--------------------------------------------------------------------------
*/

/* HAIR REMOVAL */
"hair-removal.php" => [
    "title" => "Hair Removal | HOK Aesthetics",
    "description" => "Advanced laser hair removal treatment for smooth, long-lasting results with safe and personalized care at HOK Aesthetics.",
    "keywords" => "laser hair removal, permanent hair reduction, smooth skin, HOK Aesthetics",
    "canonical" => "",
    "robots" => "index, follow"
],

/* ACNE TREATMENT */
"acne-treatment.php" => [
    "title" => "Acne Treatment | HOK Aesthetics",
    "description" => "Personalized acne treatments to reduce breakouts, control oil, and improve skin clarity with advanced dermatological care.",
    "keywords" => "acne treatment, pimples treatment, acne clinic, clear skin treatment",
    "canonical" => "",
    "robots" => "index, follow"
],

/* ACNE SCAR REDUCTION */
"acne-scar-reduction.php" => [
    "title" => "Acne Scar Reduction | HOK Aesthetics",
    "description" => "Reduce acne scars and improve skin texture with advanced laser and skin resurfacing treatments at HOK Aesthetics.",
    "keywords" => "acne scar reduction, acne scar treatment, laser resurfacing, skin texture",
    "canonical" => "",
    "robots" => "index, follow"
],

/* SCAR REMOVAL */
"scar-removal.php" => [
    "title" => "Scar Removal | HOK Aesthetics",
    "description" => "Advanced scar removal treatments to minimize the appearance of surgical, injury, and acne scars with personalized care.",
    "keywords" => "scar removal, laser scar treatment, scar reduction, skin rejuvenation",
    "canonical" => "",
    "robots" => "index, follow"
],

/* TATTOO REMOVAL */
"tattoo-removal.php" => [
    "title" => "Tattoo Removal | HOK Aesthetics",
    "description" => "Safe and effective laser tattoo removal treatments designed to fade unwanted tattoos with modern laser technology.",
    "keywords" => "tattoo removal, laser tattoo removal, tattoo fading, HOK Aesthetics",
    "canonical" => "",
    "robots" => "index, follow"
],

/* PIGMENTATION TREATMENT */
"pigmentation-treatment.php" => [
    "title" => "Pigmentation Treatment | HOK Aesthetics",
    "description" => "Treat pigmentation, dark spots, uneven skin tone, and discoloration with advanced laser skin treatments.",
    "keywords" => "pigmentation treatment, dark spots, uneven skin tone, laser pigmentation",
    "canonical" => "",
    "robots" => "index, follow"
],

/* VASCULAR LESION TREATMENT */
"vascular-lesion-treatment.php" => [
    "title" => "Vascular Lesion Treatment | HOK Aesthetics",
    "description" => "Advanced vascular lesion treatments to reduce visible veins, redness, and vascular skin concerns with precision laser care.",
    "keywords" => "vascular lesion treatment, visible veins, redness treatment, laser vein treatment",
    "canonical" => "",
    "robots" => "index, follow"
],

/* STRETCH MARK REDUCTION */
"stretch-mark-reduction.php" => [
    "title" => "Stretch Mark Reduction | HOK Aesthetics",
    "description" => "Reduce the appearance of stretch marks and improve skin texture with advanced rejuvenation treatments.",
    "keywords" => "stretch mark reduction, stretch marks treatment, skin rejuvenation, laser treatment",
    "canonical" => "",
    "robots" => "index, follow"
],

/* SKIN REJUVENATION */
"skin-rejuvenation.php" => [
    "title" => "Skin Rejuvenation | HOK Aesthetics",
    "description" => "Revitalize your skin with advanced skin rejuvenation treatments for a brighter, smoother, and youthful appearance.",
    "keywords" => "skin rejuvenation, glowing skin, anti aging skin treatment, facial rejuvenation",
    "canonical" => "",
    "robots" => "index, follow"
],

/* PORE REFINEMENT */
"pore-refinement.php" => [
    "title" => "Pore Refinement | HOK Aesthetics",
    "description" => "Minimize enlarged pores and achieve smoother skin with advanced pore refinement treatments at HOK Aesthetics.",
    "keywords" => "pore refinement, enlarged pores treatment, smooth skin, skin texture",
    "canonical" => "",
    "robots" => "index, follow"
],

/* MELASMA TREATMENT */
"melasma-treatment.php" => [
    "title" => "Melasma Treatment | HOK Aesthetics",
    "description" => "Personalized melasma treatments to reduce stubborn pigmentation and restore a more even skin tone.",
    "keywords" => "melasma treatment, pigmentation treatment, dark patches, even skin tone",
    "canonical" => "",
    "robots" => "index, follow"
],

/* PHOTO FACIAL */
"photo-facial.php" => [
    "title" => "Photo Facial | HOK Aesthetics",
    "description" => "Advanced photo facial treatment to improve skin tone, texture, and radiance with non-invasive light-based technology.",
    "keywords" => "photo facial, IPL facial, glowing skin treatment, skin brightening",
    "canonical" => "",
    "robots" => "index, follow"
],

/*
|--------------------------------------------------------------------------
|     Injectables
|--------------------------------------------------------------------------
*/

/* BOTOX */
"botox.php" => [
    "title" => "Botox | HOK Aesthetics",
    "description" => "Smooth fine lines and wrinkles with advanced Botox treatments for natural-looking facial rejuvenation at HOK Aesthetics.",
    "keywords" => "Botox, wrinkle treatment, anti wrinkle injections, facial rejuvenation",
    "canonical" => "",
    "robots" => "index, follow"
],

/* DERMAL FILLERS */
"dermal-fillers.php" => [
    "title" => "Dermal Fillers | HOK Aesthetics",
    "description" => "Enhance facial contours and restore lost volume with premium dermal filler treatments tailored to your features.",
    "keywords" => "dermal fillers, facial fillers, volume restoration, aesthetic clinic",
    "canonical" => "",
    "robots" => "index, follow"
],

/* CHIN & JAWLINE CONTOURING */
"chin-jawline-contouring.php" => [
    "title" => "Chin & Jawline Contouring | HOK Aesthetics",
    "description" => "Achieve a sharper chin and defined jawline with advanced contouring treatments for balanced facial proportions.",
    "keywords" => "chin contouring, jawline contouring, facial sculpting, jawline enhancement",
    "canonical" => "",
    "robots" => "index, follow"
],

/* LIP ENHANCEMENT */
"lip-enhancement.php" => [
    "title" => "Lip Enhancement | HOK Aesthetics",
    "description" => "Enhance lip shape, definition, and volume with natural-looking lip enhancement treatments at HOK Aesthetics.",
    "keywords" => "lip enhancement, lip fillers, fuller lips, lip contouring",
    "canonical" => "",
    "robots" => "index, follow"
],

/* CHEEK VOLUMIZING */
"cheek-volumizing.php" => [
    "title" => "Cheek Volumizing | HOK Aesthetics",
    "description" => "Restore youthful facial volume and enhance cheek contours with advanced cheek volumizing treatments.",
    "keywords" => "cheek volumizing, cheek fillers, facial volume, cheek enhancement",
    "canonical" => "",
    "robots" => "index, follow"
],

/* BROW LIFT */
"brow-lift.php" => [
    "title" => "Brow Lift | HOK Aesthetics",
    "description" => "Lift and define your brows with advanced brow lift treatments for a refreshed and youthful appearance.",
    "keywords" => "brow lift, eyebrow lift, lifted brows, facial rejuvenation",
    "canonical" => "",
    "robots" => "index, follow"
],

/* UNDER EYE REJUVENATION */
"under-eye-rejuvenation.php" => [
    "title" => "Under Eye Rejuvenation | HOK Aesthetics",
    "description" => "Reduce under-eye hollows, dark circles, and tired-looking eyes with advanced rejuvenation treatments.",
    "keywords" => "under eye rejuvenation, dark circles treatment, eye fillers, eye rejuvenation",
    "canonical" => "",
    "robots" => "index, follow"
],

/* NECK REJUVENATION */
"neck-rejuvenation.php" => [
    "title" => "Neck Rejuvenation | HOK Aesthetics",
    "description" => "Improve skin firmness and reduce neck lines with advanced neck rejuvenation treatments at HOK Aesthetics.",
    "keywords" => "neck rejuvenation, neck tightening, neck wrinkles treatment, youthful neck",
    "canonical" => "",
    "robots" => "index, follow"
],


/*
|--------------------------------------------------------------------------
|  Weight Loss Management
|--------------------------------------------------------------------------
*/

/* MEDICAL WEIGHT LOSS PROGRAM */
"medical-weight-loss-program.php" => [
    "title" => "Medical Weight Loss Program | HOK Aesthetics",
    "description" => "Achieve sustainable weight loss with a medically supervised weight loss program tailored to your body, lifestyle, and health goals.",
    "keywords" => "medical weight loss, weight management, obesity treatment, weight loss clinic",
    "canonical" => "",
    "robots" => "index, follow"
],

/* FAT LOSS TREATMENTS */
"fat-loss-treatments.php" => [
    "title" => "Fat Loss Treatments | HOK Aesthetics",
    "description" => "Target stubborn fat deposits with advanced fat loss treatments designed to support body contouring and healthy weight reduction.",
    "keywords" => "fat loss treatment, body contouring, stubborn fat reduction, slimming treatment",
    "canonical" => "",
    "robots" => "index, follow"
],

/* METABOLISM ENHANCEMENT */
"metabolism-enhancement.php" => [
    "title" => "Metabolism Enhancement | HOK Aesthetics",
    "description" => "Boost metabolic efficiency and support healthy weight management with personalized metabolism enhancement programs.",
    "keywords" => "metabolism enhancement, metabolic health, weight management, metabolism boost",
    "canonical" => "",
    "robots" => "index, follow"
],

/* NUTRITION & LIFESTYLE GUIDANCE */
"nutrition-lifestyle-guidance.php" => [
    "title" => "Nutrition & Lifestyle Guidance | HOK Aesthetics",
    "description" => "Personalized nutrition and lifestyle guidance to help you develop healthier habits and achieve long-term wellness goals.",
    "keywords" => "nutrition counselling, lifestyle guidance, healthy eating, wellness coaching",
    "canonical" => "",
    "robots" => "index, follow"
],

/* ANTI OBESITY PHARMACOTHERAPY */
"anti-obesity-pharmacotherapy.php" => [
    "title" => "Anti Obesity Pharmacotherapy | HOK Aesthetics",
    "description" => "Medically supervised anti-obesity pharmacotherapy programs designed to support safe and effective weight management.",
    "keywords" => "anti obesity treatment, obesity medications, medical weight loss, obesity management",
    "canonical" => "",
    "robots" => "index, follow"
],

/* WEIGHT MAINTENANCE PROGRAM */
"weight-maintenance-program.php" => [
    "title" => "Weight Maintenance Program | HOK Aesthetics",
    "description" => "Maintain your weight loss results with customized weight maintenance programs focused on long-term health and lifestyle balance.",
    "keywords" => "weight maintenance, weight management, healthy lifestyle, long term weight control",
    "canonical" => "",
    "robots" => "index, follow"
],

/*
|--------------------------------------------------------------------------
| Advance Facial
|--------------------------------------------------------------------------
*/
/* SKIN GLOW & BRIGHTNESS */
"skin-glow-brightness.php" => [
    "title" => "Skin Glow & Brightness | HOK Aesthetics",
    "description" => "Enhance your skin's natural glow with advanced skin brightening and rejuvenation treatments at HOK Aesthetics.",
    "keywords" => "skin glow treatment, skin brightening, glowing skin, facial rejuvenation",
    "canonical" => "",
    "robots" => "index, follow"
],

/* HYDRA FACIALS */
"hydra-facials.php" => [
    "title" => "Hydra Facials | HOK Aesthetics",
    "description" => "Deeply cleanse, hydrate, and revitalize your skin with advanced Hydra Facial treatments for a fresh, radiant complexion.",
    "keywords" => "Hydra Facial, hydrating facial, glowing skin treatment, facial clinic",
    "canonical" => "",
    "robots" => "index, follow"
],

/* CARBON LASER FACIALS */
"carbon-laser-facials.php" => [
    "title" => "Carbon Laser Facials | HOK Aesthetics",
    "description" => "Refresh your skin with Carbon Laser Facials that help improve texture, minimize pores, and enhance overall skin clarity.",
    "keywords" => "carbon laser facial, Hollywood facial, pore reduction, skin rejuvenation",
    "canonical" => "",
    "robots" => "index, follow"
],

/* KOREAN GLASS FACIAL */
"korean-glass-facial.php" => [
    "title" => "Korean Glass Facial | HOK Aesthetics",
    "description" => "Achieve smooth, luminous glass skin with advanced Korean Glass Facial treatments tailored for lasting radiance.",
    "keywords" => "Korean Glass Facial, glass skin treatment, glowing skin facial, skin radiance",
    "canonical" => "",
    "robots" => "index, follow"
],

/* FIRE & ICE FACIAL */
"fire-ice-facial.php" => [
    "title" => "Fire & Ice Facial | HOK Aesthetics",
    "description" => "Experience the Fire & Ice Facial designed to refresh, brighten, and rejuvenate your skin with minimal downtime.",
    "keywords" => "Fire and Ice Facial, skin rejuvenation, facial treatment, glowing skin",
    "canonical" => "",
    "robots" => "index, follow"
],

/* ACNE & PORE FACIAL */
"acne-pore-facial.php" => [
    "title" => "Acne & Pore Facial | HOK Aesthetics",
    "description" => "Reduce acne, unclog pores, and improve skin texture with customized Acne & Pore Facial treatments.",
    "keywords" => "acne facial, pore facial, acne treatment, clear skin facial",
    "canonical" => "",
    "robots" => "index, follow"
],

/* VAMPIRE FACIAL */
"vampire-facial.php" => [
    "title" => "Vampire Facial | HOK Aesthetics",
    "description" => "Stimulate collagen production and improve skin texture with advanced Vampire Facial treatments at HOK Aesthetics.",
    "keywords" => "Vampire Facial, PRP facial, collagen treatment, skin rejuvenation",
    "canonical" => "",
    "robots" => "index, follow"
],

/* MEDICAL DERMA FACIAL */
"medical-derma-facial.php" => [
    "title" => "Medical Derma Facial | HOK Aesthetics",
    "description" => "Personalized Medical Derma Facial treatments designed to cleanse, nourish, and rejuvenate your skin under expert care.",
    "keywords" => "Medical Derma Facial, derma facial, skin treatment, facial clinic",
    "canonical" => "",
    "robots" => "index, follow"
],

/*
|--------------------------------------------------------------------------
|  Permanent Makeup
|--------------------------------------------------------------------------
*/
/* MICROBLADING */
"microblading.php" => [
    "title" => "Microblading | HOK Aesthetics",
    "description" => "Achieve naturally defined, fuller-looking eyebrows with professional Microblading treatments at HOK Aesthetics.",
    "keywords" => "microblading, eyebrow microblading, semi permanent eyebrows, eyebrow enhancement",
    "canonical" => "",
    "robots" => "index, follow"
],

/* POWDER BROWS */
"powder-brows.php" => [
    "title" => "Powder Brows | HOK Aesthetics",
    "description" => "Get soft, shaded, and naturally fuller-looking brows with advanced Powder Brows treatments.",
    "keywords" => "powder brows, ombre powder brows, semi permanent eyebrows, brow enhancement",
    "canonical" => "",
    "robots" => "index, follow"
],

/* LIP BLUSH */
"lip-blush.php" => [
    "title" => "Lip Blush | HOK Aesthetics",
    "description" => "Enhance your lips with natural-looking color, definition, and symmetry through Lip Blush treatments.",
    "keywords" => "lip blush, semi permanent lip color, lip pigmentation, lip enhancement",
    "canonical" => "",
    "robots" => "index, follow"
],

/* OMBRE BROWS */
"ombre-brows.php" => [
    "title" => "Ombre Brows | HOK Aesthetics",
    "description" => "Create beautifully blended, gradient brows with professional Ombre Brows treatments at HOK Aesthetics.",
    "keywords" => "ombre brows, eyebrow shading, gradient brows, brow enhancement",
    "canonical" => "",
    "robots" => "index, follow"
],

/* EYELINER */
"eyeliner.php" => [
    "title" => "Permanent Eyeliner | HOK Aesthetics",
    "description" => "Define your eyes with long-lasting Permanent Eyeliner treatments for a naturally enhanced look.",
    "keywords" => "permanent eyeliner, eyeliner tattoo, lash line enhancement, eye makeup treatment",
    "canonical" => "",
    "robots" => "index, follow"
],

/* LIP LINER */
"lip-liner.php" => [
    "title" => "Permanent Lip Liner | HOK Aesthetics",
    "description" => "Enhance lip definition and symmetry with long-lasting Permanent Lip Liner treatments.",
    "keywords" => "permanent lip liner, lip contouring, lip definition, lip tattoo",
    "canonical" => "",
    "robots" => "index, follow"
],

/* SCALP MICROPIGMENTATION */
"scalp-micropigmentation.php" => [
    "title" => "Scalp Micropigmentation | HOK Aesthetics",
    "description" => "Create the appearance of fuller hair with advanced Scalp Micropigmentation treatments for a natural-looking scalp.",
    "keywords" => "scalp micropigmentation, SMP treatment, scalp tattoo, hair density treatment",
    "canonical" => "",
    "robots" => "index, follow"
],

/* LASH LINE ENHANCEMENT */
"lash-line-enhancement.php" => [
    "title" => "Lash Line Enhancement | HOK Aesthetics",
    "description" => "Enhance your lash line with subtle, long-lasting definition through professional Lash Line Enhancement treatments.",
    "keywords" => "lash line enhancement, permanent eyeliner, eyelash enhancement, eye definition",
    "canonical" => "",
    "robots" => "index, follow"
],

/* BEAUTY MARKS */
"beauty-marks.php" => [
    "title" => "Beauty Marks | HOK Aesthetics",
    "description" => "Add elegant, natural-looking beauty marks with precise semi-permanent cosmetic treatments.",
    "keywords" => "beauty marks, cosmetic beauty spot, permanent beauty mark, facial enhancement",
    "canonical" => "",
    "robots" => "index, follow"
],

/* SCAR CAMOUFLAGE */
"scar-camouflage.php" => [
    "title" => "Scar Camouflage | HOK Aesthetics",
    "description" => "Reduce the visibility of scars with advanced Scar Camouflage treatments that blend naturally with your skin tone.",
    "keywords" => "scar camouflage, scar pigmentation treatment, cosmetic tattoo, scar correction",
    "canonical" => "",
    "robots" => "index, follow"
],

/*
|--------------------------------------------------------------------------
| Gynaecology Aesthetics
|--------------------------------------------------------------------------
*/

/* INTIMATE SKIN AESTHETICS */
"intimate-skin-aesthetics.php" => [
    "title" => "Intimate Skin Aesthetics | HOK Aesthetics",
    "description" => "Advanced intimate skin aesthetic treatments designed to improve skin tone, texture, comfort, and confidence with personalized care.",
    "keywords" => "intimate skin aesthetics, intimate rejuvenation, intimate wellness, HOK Aesthetics",
    "canonical" => "",
    "robots" => "index, follow"
],

/* INTIMATE LASER TREATMENTS */
"intimate-laser-treatments.php" => [
    "title" => "Intimate Laser Treatments | HOK Aesthetics",
    "description" => "Safe and advanced intimate laser treatments for rejuvenation, improved skin quality, and enhanced comfort with minimal downtime.",
    "keywords" => "intimate laser treatments, vaginal rejuvenation laser, intimate wellness, laser rejuvenation",
    "canonical" => "",
    "robots" => "index, follow"
],

/* VAGINAL TIGHTENING */
"vaginal-tightening.php" => [
    "title" => "Vaginal Tightening | HOK Aesthetics",
    "description" => "Advanced vaginal tightening treatments to improve firmness, elasticity, and intimate wellness with personalized care.",
    "keywords" => "vaginal tightening, intimate rejuvenation, vaginal wellness, HOK Aesthetics",
    "canonical" => "",
    "robots" => "index, follow"
],

/* VAGINAL DRYNESS TREATMENT */
"vaginal-dryness-treatment.php" => [
    "title" => "Vaginal Dryness Treatment | HOK Aesthetics",
    "description" => "Effective vaginal dryness treatments designed to restore comfort, hydration, and overall intimate wellness.",
    "keywords" => "vaginal dryness treatment, intimate hydration, vaginal wellness, women's health",
    "canonical" => "",
    "robots" => "index, follow"
],

/* URINARY LEAKAGE MANAGEMENT */
"urinary-leakage-management.php" => [
    "title" => "Urinary Leakage Management | HOK Aesthetics",
    "description" => "Personalized urinary leakage management treatments to improve bladder control and enhance everyday confidence.",
    "keywords" => "urinary leakage management, bladder control treatment, women's wellness, pelvic health",
    "canonical" => "",
    "robots" => "index, follow"
],

/* INTIMATE INJECTABLE & PRP */
"intimate-injectable-prp.php" => [
    "title" => "Intimate Injectable & PRP | HOK Aesthetics",
    "description" => "Advanced intimate injectable and PRP treatments designed to support tissue rejuvenation and enhance intimate wellness.",
    "keywords" => "intimate PRP, intimate injectable treatment, PRP rejuvenation, women's intimate wellness",
    "canonical" => "",
    "robots" => "index, follow"
],


/*
|--------------------------------------------------------------------------
|Dental Aesthetics
|--------------------------------------------------------------------------
*/

/* TEETH WHITENING */
"teeth-whitening.php" => [
    "title" => "Teeth Whitening | HOK Aesthetics",
    "description" => "Brighten your smile with professional teeth whitening treatments for safe, effective, and long-lasting results at HOK Aesthetics.",
    "keywords" => "teeth whitening, professional teeth whitening, brighter smile, dental aesthetics",
    "canonical" => "",
    "robots" => "index, follow"
],

/* GUMMY SMILE TREATMENT */
"gummy-smile-treatment.php" => [
    "title" => "Gummy Smile Treatment | HOK Aesthetics",
    "description" => "Enhance your smile with advanced gummy smile treatments designed to create balanced and natural-looking smile proportions.",
    "keywords" => "gummy smile treatment, smile correction, gum contouring, dental aesthetics",
    "canonical" => "",
    "robots" => "index, follow"
],

/* AESTHETIC CROWN & BRIDGES */
"aesthetic-crown-bridges.php" => [
    "title" => "Aesthetic Crown & Bridges | HOK Aesthetics",
    "description" => "Restore damaged or missing teeth with aesthetic crowns and bridges that blend naturally with your smile.",
    "keywords" => "dental crowns, dental bridges, aesthetic crowns, cosmetic dentistry",
    "canonical" => "",
    "robots" => "index, follow"
],

/* DENTAL IMPLANTS */
"dental-implants.php" => [
    "title" => "Dental Implants | HOK Aesthetics",
    "description" => "Replace missing teeth with advanced dental implant treatments designed for a natural look, comfort, and long-term durability.",
    "keywords" => "dental implants, tooth replacement, implant dentistry, cosmetic dentistry",
    "canonical" => "",
    "robots" => "index, follow"
],

/* VENEER & COSMETIC BONDING */
"veneer-cosmetic-bonding.php" => [
    "title" => "Veneer & Cosmetic Bonding | HOK Aesthetics",
    "description" => "Improve your smile with veneers and cosmetic bonding treatments that enhance tooth shape, color, and overall appearance.",
    "keywords" => "dental veneers, cosmetic bonding, smile makeover, cosmetic dentistry",
    "canonical" => "",
    "robots" => "index, follow"
],

/* INVISALIGN & CLEAR ALIGNERS */
"invisalign-clear-aligners.php" => [
    "title" => "Invisalign & Clear Aligners | HOK Aesthetics",
    "description" => "Straighten your teeth discreetly with Invisalign and clear aligner treatments for a comfortable and confident smile.",
    "keywords" => "Invisalign, clear aligners, invisible braces, teeth straightening",
    "canonical" => "",
    "robots" => "index, follow"
],

/* SMILE MAKEOVER */
"smile-makeover.php" => [
    "title" => "Smile Makeover | HOK Aesthetics",
    "description" => "Transform your smile with personalized smile makeover treatments combining advanced cosmetic dental solutions.",
    "keywords" => "smile makeover, cosmetic dentistry, smile design, dental aesthetics",
    "canonical" => "",
    "robots" => "index, follow"
],

/* ROOT CANAL TREATMENT */
"root-canal-treatment.php" => [
    "title" => "Root Canal Treatment | HOK Aesthetics",
    "description" => "Save damaged or infected teeth with advanced root canal treatment focused on comfort, precision, and long-term oral health.",
    "keywords" => "root canal treatment, RCT, tooth infection treatment, dental care",
    "canonical" => "",
    "robots" => "index, follow"
],

];


/*
|--------------------------------------------------------------------------
| DEFAULT META
|--------------------------------------------------------------------------
*/

$defaultMeta = [
    "title" => "HOK Aesthetics | Advanced Skin, Hair & Cosmetic Clinic",
    "description" => "HOK Aesthetics offers advanced skin treatments, hair restoration, laser procedures, injectables, body contouring, dental aesthetics, and personalized cosmetic care.",
    "keywords" => "HOK Aesthetics, skin clinic, hair restoration, laser treatments, Botox, dermal fillers, cosmetic clinic, dental aesthetics, aesthetic treatments",
    "canonical" => "",
    "robots" => "index, follow"
];


/*
|--------------------------------------------------------------------------
| META SELECTOR
|--------------------------------------------------------------------------
*/

$pageMeta = $seoData[$currentPage] ?? $defaultMeta;

?>
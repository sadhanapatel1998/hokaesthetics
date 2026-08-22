<?php
$categories = [
    ['title' => 'Skin Aesthetics', 'image' => 'skin-aesthetics.png', 'class' => ''],
    ['title' => 'Hair Restoration', 'image' => 'hair-restoration.png', 'class' => ''],
    ['title' => 'Laser Treatments', 'image' => 'laser-treatments.png', 'class' => ''],
    ['title' => 'Injectables', 'image' => 'Injectables.png', 'class' => ''],
    ['title' => 'Weight Loss', 'image' => 'weight-loss.png', 'class' => ''],
    ['title' => 'Plastic Surgeries', 'image' => 'facial-plastic-surgeries.png', 'class' => ''],
    ['title' => 'Medical Cosmetology', 'image' => 'medical-cosmetology.png', 'class' => ''],
    ['title' => 'Gynaecology', 'image' => 'gynaecology-aesthetics.png', 'class' => ''],
    ['title' => 'Dental Aesthetics', 'image' => 'dental-aesthetics.png', 'class' => ''],
];

$services = [
    "skin-aesthetics" => [
        "title" => "Skin Aesthetics",
        "image" => "assets/image/services/skin-aesthetics.jpg",
        "icon" => "fas fa-spa",
        "subs" => [
            ["name" => "Laser Skin Treatments", "category" => "skin-aesthetics", "image" => "assets/image/services/laser-skin-treatments.jpg", "description" => "Advanced laser treatments for smoother, healthier, and naturally radiant skin."],
            ["name" => "Wrinkle & Lines Treatments", "category" => "skin-aesthetics", "image" => "assets/image/services/wrinkle-lines-treatments.jpg", "description" => "Reduce fine lines and wrinkles for a youthful, refreshed appearance."],
            ["name" => "Pigmentation Problems", "category" => "skin-aesthetics", "image" => "assets/image/services/pigmentation-problems.jpg", "description" => "Target uneven skin tone, dark spots, and stubborn pigmentation."],
            ["name" => "Acne & Scar Treatments", "category" => "skin-aesthetics", "image" => "assets/image/services/acne-scar-treatments.jpg", "description" => "Effective solutions for acne control and scar reduction."],
            ["name" => "Anti Ageing Treatments", "category" => "skin-aesthetics", "image" => "assets/image/services/anti-ageing-treatments.jpg", "description" => "Restore skin firmness and maintain a naturally youthful glow."],
            ["name" => "Botox & Fillers", "category" => "skin-aesthetics", "image" => "assets/image/services/botox-fillers.jpg", "description" => "Enhance facial features with safe, natural-looking injectable treatments."]
        ]
    ],

    "hair-restoration" => [
        "title" => "Hair Restoration",
        "image" => "assets/image/services/hair-restoration.jpg",
        "icon" => "fas fa-cut",
        "subs" => [
            ["name" => "Medical Hair Management", "category" => "hair-restoration", "image" => "assets/image/services/medical-hair-management.jpg", "description" => "Personalized medical solutions to improve hair growth and scalp health."],
            ["name" => "Non Surgical Hair Loss Management", "category" => "hair-restoration", "image" => "assets/image/services/non-surgical-hair-loss-management.jpg", "description" => "Advanced therapies to reduce hair fall without surgery."],
            ["name" => "Hair Transplant", "category" => "hair-restoration", "image" => "assets/image/services/hair-transplant.jpg", "description" => "Natural-looking hair restoration with advanced transplant techniques."],
            ["name" => "Scalp Micro Pigmentation", "category" => "hair-restoration", "image" => "assets/image/services/scalp-micro-pigmentation.jpg", "description" => "Create the appearance of fuller hair with scalp pigmentation."],
            ["name" => "Beard and Eyebrow Restoration", "category" => "hair-restoration", "image" => "assets/image/services/beard-eyebrow-restoration.jpg", "description" => "Restore beard and eyebrow density with precision treatments."]
        ]
    ],

    "laser-treatments" => [
        "title" => "Laser Treatments",
        "image" => "assets/image/services/laser-treatments.jpg",
        "icon" => "fas fa-bolt",
        "subs" => [
            ["name" => "Hair Removal", "category" => "laser-treatments", "image" => "assets/image/services/hair-removal.jpg", "description" => "Long-lasting laser hair reduction for smooth, hassle-free skin."],
            ["name" => "Acne Treatment", "category" => "laser-treatments", "image" => "assets/image/services/acne-treatment.jpg", "description" => "Reduce active acne with advanced laser-based skin therapy."],
            ["name" => "Acne Scar Reduction", "category" => "laser-treatments", "image" => "assets/image/services/acne-scar-reduction.jpg", "description" => "Minimize acne scars for smoother, even-textured skin."],
            ["name" => "Scar Removal", "category" => "laser-treatments", "image" => "assets/image/services/scar-removal.jpg", "description" => "Improve the appearance of surgical and injury-related scars."],
            ["name" => "Tattoo Removal", "category" => "laser-treatments", "image" => "assets/image/services/tattoo-removal.jpg", "description" => "Safe laser technology for gradual tattoo removal."],
            ["name" => "Pigmentation Treatment", "category" => "laser-treatments", "image" => "assets/image/services/pigmentation-treatment.jpg", "description" => "Fade dark spots and uneven pigmentation effectively."],
            ["name" => "Vascular Lesion Treatment", "category" => "laser-treatments", "image" => "assets/image/services/vascular-lesion-treatment.jpg", "description" => "Treat visible veins and vascular skin concerns safely."],
            ["name" => "Stretch Mark Reduction", "category" => "laser-treatments", "image" => "assets/image/services/stretch-mark-reduction.jpg", "description" => "Reduce stretch marks and improve skin texture."],
            ["name" => "Skin Rejuvenation", "category" => "laser-treatments", "image" => "assets/image/services/skin-rejuvenation.jpg", "description" => "Refresh dull skin with collagen-boosting laser treatments."],
            ["name" => "Pore Refinement", "category" => "laser-treatments", "image" => "assets/image/services/pore-refinement.jpg", "description" => "Reduce enlarged pores for smoother-looking skin."],
            ["name" => "Melasma Treatment", "category" => "laser-treatments", "image" => "assets/image/services/melasma-treatment.jpg", "description" => "Target stubborn melasma with advanced laser care."],
            ["name" => "Photo Facial", "category" => "laser-treatments", "image" => "assets/image/services/photo-facial.jpg", "description" => "Brighten skin tone and improve overall skin clarity."]
        ]
    ],

    "injectables" => [
        "title" => "Injectables",
        "image" => "assets/image/services/injectables.jpg",
        "icon" => "fas fa-syringe",
        "subs" => [
            ["name" => "Botox", "category" => "injectables", "image" => "assets/image/services/botox.jpg", "description" => "Smooth dynamic wrinkles with precision Botox treatments."],
            ["name" => "Dermal Fillers", "category" => "injectables", "image" => "assets/image/services/dermal-fillers.jpg", "description" => "Restore volume and enhance facial contours naturally."],
            ["name" => "Chin & Jawline Contouring", "category" => "injectables", "image" => "assets/image/services/chin-jawline-contouring.jpg", "description" => "Define your jawline with expertly placed fillers."],
            ["name" => "Lip Enhancement", "category" => "injectables", "image" => "assets/image/services/lip-enhancement.jpg", "description" => "Achieve fuller, balanced lips with natural-looking results."],
            ["name" => "Cheek Volumizing", "category" => "injectables", "image" => "assets/image/services/cheek-volumizing.jpg", "description" => "Lift and restore youthful cheek volume."],
            ["name" => "Brow Lift", "category" => "injectables", "image" => "assets/image/services/brow-lift.jpg", "description" => "Create a refreshed look with a non-surgical brow lift."],
            ["name" => "Under Eye Rejuvenation", "category" => "injectables", "image" => "assets/image/services/under-eye-rejuvenation.jpg", "description" => "Reduce tired-looking under-eye hollows effectively."],
            ["name" => "Neck Rejuvenation", "category" => "injectables", "image" => "assets/image/services/neck-rejuvenation.jpg", "description" => "Improve neck texture and reduce visible aging signs."]
        ]
    ],

    "weight-loss-management" => [
        "title" => "Weight Loss Management",
        "image" => "assets/image/services/weight-loss-management.jpg",
        "icon" => "fas fa-weight",
        "subs" => [
            ["name" => "Medical Weight Loss Program", "category" => "weight-loss-management", "image" => "assets/image/services/medical-weight-loss-program.jpg", "description" => "Doctor-supervised weight loss tailored to your health goals."],
            ["name" => "Fat Loss Treatments", "category" => "weight-loss-management", "image" => "assets/image/services/fat-loss-treatments.jpg", "description" => "Target stubborn fat with advanced body contouring solutions."],
            ["name" => "Metabolism Enhancement", "category" => "weight-loss-management", "image" => "assets/image/services/metabolism-enhancement.jpg", "description" => "Support healthy metabolism through personalized care."],
            ["name" => "Nutrition and Lifestyle Guidance", "category" => "weight-loss-management", "image" => "assets/image/services/nutrition-lifestyle-guidance.jpg", "description" => "Sustainable nutrition plans for long-term wellness."],
            ["name" => "Anti Obesity Pharmacotherapy", "category" => "weight-loss-management", "image" => "assets/image/services/anti-obesity-pharmacotherapy.jpg", "description" => "Medical support for effective obesity management."],
            ["name" => "Weight Maintenance Program", "category" => "weight-loss-management", "image" => "assets/image/services/weight-maintenance-program.jpg", "description" => "Maintain healthy results with expert follow-up care."]
        ]
    ],

    "advance-facial" => [
        "title" => "Advance Facial",
        "image" => "assets/image/services/advance-facial.jpg",
        "icon" => "fas fa-smile",
        "subs" => [
            ["name" => "Skin Glow and Brightness", "category" => "advance-facial", "image" => "assets/image/services/skin-glow-brightness.jpg", "description" => "Boost radiance for naturally glowing, healthy-looking skin."],
            ["name" => "Hydra Facials", "category" => "advance-facial", "image" => "assets/image/services/hydra-facials.jpg", "description" => "Deep cleanse, hydrate, and refresh your skin instantly."],
            ["name" => "Carbon Laser Facials", "category" => "advance-facial", "image" => "assets/image/services/carbon-laser-facials.jpg", "description" => "Refine pores and improve skin clarity with laser technology."],
            ["name" => "Korean Glass Facial", "category" => "advance-facial", "image" => "assets/image/services/korean-glass-facial.jpg", "description" => "Achieve smooth, luminous glass-like skin."],
            ["name" => "Fire and Ice Facial", "category" => "advance-facial", "image" => "assets/image/services/fire-ice-facial.jpg", "description" => "Revitalize skin with a premium dual-action facial."],
            ["name" => "Acne and Pore Facial", "category" => "advance-facial", "image" => "assets/image/services/acne-pore-facial.jpg", "description" => "Cleanse congested pores while calming acne-prone skin."],
            ["name" => "Vampire Facial", "category" => "advance-facial", "image" => "assets/image/services/vampire-facial.jpg", "description" => "PRP-powered facial for natural skin rejuvenation."],
            ["name" => "Medical Derma Facial", "category" => "advance-facial", "image" => "assets/image/services/medical-derma-facial.jpg", "description" => "Professional facial designed for healthier, radiant skin."]
        ]
    ],

    "permanent-makeup" => [
        "title" => "Permanent Makeup",
        "image" => "assets/image/services/permanent-makeup.jpg",
        "icon" => "fas fa-paint-brush",
        "subs" => [
            ["name" => "Permanent Microblading", "category" => "permanent-makeup", "image" => "assets/image/services/microblading.jpg", "description" => "Natural-looking eyebrow enhancement with precise strokes."],
            ["name" => "Permanent Powder Brows", "category" => "permanent-makeup", "image" => "assets/image/services/powder-brows.jpg", "description" => "Soft, filled-in brows with long-lasting results."],
            ["name" => "Permanent Lip Blush", "category" => "permanent-makeup", "image" => "assets/image/services/lip-blush.jpg", "description" => "Enhance natural lip color and definition beautifully."],
            ["name" => "Permanent Ombre Brows", "category" => "permanent-makeup", "image" => "assets/image/services/ombre-brows.jpg", "description" => "Create elegant gradient brows with lasting beauty."],
            ["name" => "Permanent Eyeliner", "category" => "permanent-makeup", "image" => "assets/image/services/permanent-eyeliner.jpg", "description" => "Wake up with perfectly defined eyes every day."],
            ["name" => "Permanent Lip Liner", "category" => "permanent-makeup", "image" => "assets/image/services/lip-liner.jpg", "description" => "Improve lip shape with permanent definition."],
            ["name" => "Scalp Micropigmentation", "category" => "permanent-makeup", "image" => "assets/image/services/scalp-micropigmentation.jpg", "description" => "Create the illusion of fuller hair density."],
            ["name" => "Lash Line Enhancement", "category" => "permanent-makeup", "image" => "assets/image/services/lash-line-enhancement.jpg", "description" => "Subtle lash definition for naturally enhanced eyes."],
            ["name" => "Beauty Marks", "category" => "permanent-makeup", "image" => "assets/image/services/beauty-marks.jpg", "description" => "Elegant beauty marks with safe cosmetic pigmentation."],
            ["name" => "Scar Camouflage", "category" => "permanent-makeup", "image" => "assets/image/services/scar-camouflage.jpg", "description" => "Blend scars naturally with advanced pigmentation techniques."]
        ]
    ],

    "gynaecology-aesthetics" => [
        "title" => "Gynaecology Aesthetics",
        "image" => "assets/image/services/gynaecology-aesthetics.jpg",
        "icon" => "fas fa-venus",
        "subs" => [
            ["name" => "Intimate Skin Aesthetics", "category" => "gynaecology-aesthetics", "image" => "assets/image/services/intimate-skin-aesthetics.jpg", "description" => "Improve intimate skin appearance with personalized care."],
            ["name" => "Intimate Laser Treatments", "category" => "gynaecology-aesthetics", "image" => "assets/image/services/intimate-laser-treatments.jpg", "description" => "Advanced laser care for intimate wellness concerns."],
            ["name" => "Vaginal Tightening", "category" => "gynaecology-aesthetics", "image" => "assets/image/services/vaginal-tightening.jpg", "description" => "Non-surgical rejuvenation for improved confidence and comfort."],
            ["name" => "Vaginal Dryness Treatment", "category" => "gynaecology-aesthetics", "image" => "assets/image/services/vaginal-dryness-treatment.jpg", "description" => "Restore comfort with advanced intimate wellness solutions."],
            ["name" => "Urinary Leakage Management", "category" => "gynaecology-aesthetics", "image" => "assets/image/services/urinary-leakage-management.jpg", "description" => "Treat urinary leakage with modern non-invasive therapies."],
            ["name" => "Intimate Injectable and PRP", "category" => "gynaecology-aesthetics", "image" => "assets/image/services/intimate-injectable-prp.jpg", "description" => "PRP and injectable treatments for intimate rejuvenation."]
        ]
    ],

    "dental-aesthetics" => [
        "title" => "Dental Aesthetics",
        "image" => "assets/image/services/dental-aesthetics.jpg",
        "icon" => "fas fa-tooth",
        "subs" => [
            ["name" => "Teeth Whitening", "category" => "dental-aesthetics", "image" => "assets/image/services/teeth-whitening.jpg", "description" => "Brighten your smile with professional whitening treatments."],
            ["name" => "Gummy Smile Treatment", "category" => "dental-aesthetics", "image" => "assets/image/services/gummy-smile-treatment.jpg", "description" => "Achieve a balanced smile with advanced aesthetic care."],
            ["name" => "Aesthetic Crown and Bridges", "category" => "dental-aesthetics", "image" => "assets/image/services/aesthetic-crown-bridges.jpg", "description" => "Natural-looking crowns and bridges for a confident smile."],
            ["name" => "Dental Implants", "category" => "dental-aesthetics", "image" => "assets/image/services/dental-implants.jpg", "description" => "Permanent tooth replacement with modern implant solutions."],
            ["name" => "Veneer and Cosmetic Bonding", "category" => "dental-aesthetics", "image" => "assets/image/services/veneer-cosmetic-bonding.jpg", "description" => "Transform your smile with veneers and cosmetic bonding."],
            ["name" => "Invisalign and Clear Aligners", "category" => "dental-aesthetics", "image" => "assets/image/services/invisalign-clear-aligners.jpg", "description" => "Straighten teeth discreetly with clear aligners."],
            ["name" => "Smile Makeover", "category" => "dental-aesthetics", "image" => "assets/image/services/smile-makeover.jpg", "description" => "Complete smile transformation tailored to your goals."],
            ["name" => "Root Canal Treatment", "category" => "dental-aesthetics", "image" => "assets/image/services/root-canal-treatment.jpg", "description" => "Relieve pain while preserving your natural tooth."]
        ]
    ]
];

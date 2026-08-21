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
            ["name"=>"Laser Skin Treatments","category"=>"skin-aesthetics"],
            ["name"=>"Wrinkle & Lines Treatments","category"=>"skin-aesthetics"],
            ["name"=>"Pigmentation Problems","category"=>"skin-aesthetics"],
            ["name"=>"Acne & Scar Treatments","category"=>"skin-aesthetics"],
            ["name"=>"Anti Ageing Treatments","category"=>"skin-aesthetics"],
            ["name"=>"Botox & Fillers","category"=>"skin-aesthetics"],
        ]
    ],

    "hair-restoration" => [
        "title" => "Hair Restoration",
        "image" => "assets/image/services/hair-restoration.jpg",
        "icon" => "fas fa-cut",
        "subs" => [
            ["name"=>"Medical Hair Management","category"=>"hair-restoration"],
            ["name"=>"Non Surgical Hair Loss Management","category"=>"hair-restoration"],
            ["name"=>"Hair Transplant","category"=>"hair-restoration"],
            ["name"=>"Scalp Micro Pigmentation","category"=>"hair-restoration"],
            ["name"=>"Beard and Eyebrow Restoration","category"=>"hair-restoration"],
        ]
    ],

    "laser-treatments" => [
        "title" => "Laser Treatments",
        "image" => "assets/image/services/laser-treatments.jpg",
        "icon" => "fas fa-bolt",
        "subs" => [
            ["name"=>"Hair Removal","category"=>"laser-treatments"],
            ["name"=>"Acne Treatment","category"=>"laser-treatments"],
            ["name"=>"Acne Scar Reduction","category"=>"laser-treatments"],
            ["name"=>"Scar Removal","category"=>"laser-treatments"],
            ["name"=>"Tattoo Removal","category"=>"laser-treatments"],
            ["name"=>"Pigmentation Treatment","category"=>"laser-treatments"],
            ["name"=>"Vascular Lesion Treatment","category"=>"laser-treatments"],
            ["name"=>"Stretch Mark Reduction","category"=>"laser-treatments"],
            ["name"=>"Skin Rejuvenation","category"=>"laser-treatments"],
            ["name"=>"Pore Refinement","category"=>"laser-treatments"],
            ["name"=>"Melasma Treatment","category"=>"laser-treatments"],
            ["name"=>"Photo Facial","category"=>"laser-treatments"],
        ]
    ],

    "injectables" => [
        "title" => "Injectables",
        "image" => "assets/image/services/injectables.jpg",
        "icon" => "fas fa-syringe",
        "subs" => [
            ["name"=>"Botox","category"=>"injectables"],
            ["name"=>"Dermal Fillers","category"=>"injectables"],
            ["name"=>"Chin & Jawline Contouring","category"=>"injectables"],
            ["name"=>"Lip Enhancement","category"=>"injectables"],
            ["name"=>"Cheek Volumizing","category"=>"injectables"],
            ["name"=>"Brow Lift","category"=>"injectables"],
            ["name"=>"Under Eye Rejuvenation","category"=>"injectables"],
            ["name"=>"Neck Rejuvenation","category"=>"injectables"],
        ]
    ],

    "weight-loss-management" => [
        "title" => "Weight Loss Management",
        "image" => "assets/image/services/weight-loss-management.jpg",
        "icon" => "fas fa-weight",
        "subs" => [
            ["name"=>"Medical Weight Loss Program","category"=>"weight-loss-management"],
            ["name"=>"Fat Loss Treatments","category"=>"weight-loss-management"],
            ["name"=>"Metabolism Enhancement","category"=>"weight-loss-management"],
            ["name"=>"Nutrition and Lifestyle Guidance","category"=>"weight-loss-management"],
            ["name"=>"Anti Obesity Pharmacotherapy","category"=>"weight-loss-management"],
            ["name"=>"Weight Maintenance Program","category"=>"weight-loss-management"],
        ]
    ],

    "advance-facial" => [
        "title" => "Advance Facial",
        "image" => "assets/image/services/advance-facial.jpg",
        "icon" => "fas fa-smile",
        "subs" => [
            ["name"=>"Skin Glow and Brightness","category"=>"advance-facial"],
            ["name"=>"Hydra Facials","category"=>"advance-facial"],
            ["name"=>"Carbon Laser Facials","category"=>"advance-facial"],
            ["name"=>"Korean Glass Facial","category"=>"advance-facial"],
            ["name"=>"Fire and Ice Facial","category"=>"advance-facial"],
            ["name"=>"Acne and Pore Facial","category"=>"advance-facial"],
            ["name"=>"Vampire Facial","category"=>"advance-facial"],
            ["name"=>"Medical Derma Facial","category"=>"advance-facial"],
        ]
    ],

    "permanent-makeup" => [
        "title" => "Permanent Makeup",
        "image" => "assets/image/services/permanent-makeup.jpg",
        "icon" => "fas fa-paint-brush",
        "subs" => [
            ["name"=>"Microblading","category"=>"permanent-makeup"],
            ["name"=>"Powder Brows","category"=>"permanent-makeup"],
            ["name"=>"Lip Blush","category"=>"permanent-makeup"],
            ["name"=>"Ombre Brows","category"=>"permanent-makeup"],
            ["name"=>"Eyeliner","category"=>"permanent-makeup"],
            ["name"=>"Lip Liner","category"=>"permanent-makeup"],
            ["name"=>"Scalp Micropigmentation","category"=>"permanent-makeup"],
            ["name"=>"Lash Line Enhancement","category"=>"permanent-makeup"],
            ["name"=>"Beauty Marks","category"=>"permanent-makeup"],
            ["name"=>"Scar Camouflage","category"=>"permanent-makeup"],
        ]
    ],

    "gynaecology-aesthetics" => [
        "title" => "Gynaecology Aesthetics",
        "image" => "assets/image/services/gynaecology-aesthetics.jpg",
        "icon" => "fas fa-venus",
        "subs" => [
            ["name"=>"Intimate Skin Aesthetics","category"=>"gynaecology-aesthetics"],
            ["name"=>"Intimate Laser Treatments","category"=>"gynaecology-aesthetics"],
            ["name"=>"Vaginal Tightening","category"=>"gynaecology-aesthetics"],
            ["name"=>"Vaginal Dryness Treatment","category"=>"gynaecology-aesthetics"],
            ["name"=>"Urinary Leakage Management","category"=>"gynaecology-aesthetics"],
            ["name"=>"Intimate Injectable and PRP","category"=>"gynaecology-aesthetics"],
        ]
    ],

    "dental-aesthetics" => [
        "title" => "Dental Aesthetics",
        "image" => "assets/image/services/dental-aesthetics.jpg",
        "icon" => "fas fa-tooth",
        "subs" => [
            ["name"=>"Teeth Whitening","category"=>"dental-aesthetics"],
            ["name"=>"Gummy Smile Treatment","category"=>"dental-aesthetics"],
            ["name"=>"Aesthetic Crown and Bridges","category"=>"dental-aesthetics"],
            ["name"=>"Dental Implants","category"=>"dental-aesthetics"],
            ["name"=>"Veneer and Cosmetic Bonding","category"=>"dental-aesthetics"],
            ["name"=>"Invisalign and Clear Aligners","category"=>"dental-aesthetics"],
            ["name"=>"Smile Makeover","category"=>"dental-aesthetics"],
            ["name"=>"Root Canal Treatment","category"=>"dental-aesthetics"],
        ]
    ]
];

?>
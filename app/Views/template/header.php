<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= esc($title ?? 'Lunaray Beauty Factory - Solusi Maklon Kosmetik Halal & BPOM') ?></title>
    <meta name="description" content="<?= esc($meta_description ?? 'Lunaray Beauty Factory membantu brand Anda menciptakan produk kosmetik dan skincare terintegrasi. Layanan maklon lengkap, bersertifikat Halal & BPOM.') ?>">
    <meta name="keywords" content="<?= esc($meta_keywords ?? 'maklon kosmetik, pabrik kosmetik, skincare, body care, baby care, kosmetik halal, kosmetik bpom, OEM kosmetik, ODM kosmetik') ?>">
    <meta name="author" content="Lunaray Beauty Factory">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="<?= current_url() ?>">

    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('icon/favicon-16x16.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('icon/favicon-32x32.png') ?>">
    <link rel="shortcut icon" href="<?= base_url('icon/favicon.ico') ?>">
    <link rel="apple-touch-icon" href="<?= base_url('icon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('icon/android-chrome-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="512x512" href="<?= base_url('icon/android-chrome-512x512.png') ?>">

    <meta property="og:title" content="<?= esc($title ?? 'Lunaray Beauty Factory - Solusi Maklon Kosmetik') ?>">
    <meta property="og:description" content="<?= esc($meta_description ?? 'Kami membantu brand Anda menciptakan produk kosmetik terintegrasi, bersertifikat Halal & BPOM.') ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:site_name" content="Lunaray Beauty Factory">
    <meta property="og:image" content="<?= esc($og_image ?? base_url('images/og-image-lunaray.jpg')) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@UsernameTwitterAnda"> <meta name="twitter:creator" content="@UsernameTwitterAnda"> <meta name="twitter:title" content="<?= esc($title ?? 'Lunaray Beauty Factory - Solusi Maklon Kosmetik') ?>">
    <meta name="twitter:description" content="<?= esc($meta_description ?? 'Maklon kosmetik dan skincare lengkap, bersertifikat Halal & BPOM, untuk brand Anda.') ?>">
    <meta name="twitter:image" content="<?= esc($og_image ?? base_url('images/og-image-lunaray.jpg')) ?>">

    <meta name="theme-color" content="#ffffff">
    <script src="https://cdn.tailwindcss.com"></script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Lunaray Beauty Factory",
      "url": "<?= base_url() ?>",
      "logo": "<?= base_url('icon/android-chrome-512x512.png') ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Nanjung Industrial Park, Kav 9, Kec Margaasih",
        "addressLocality": "Kab. Bandung",
        "addressRegion": "Jawa Barat",
        "country": "ID"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+62-822-8959-4567",
          "contactType": "customer service",
          "areaServed": "ID",
          "availableLanguage": "Indonesian"
        },
        {
          "@type": "ContactPoint",
          "telephone": "+62-22-86691991",
          "contactType": "customer service",
          "areaServed": "ID",
          "availableLanguage": "Indonesian"
        }
      ],
      "email": "info@lunaray.id",
      "sameAs": [
        "https://www.instagram.com/lunaraybeautyfactory/"
      ]
    }
    </script>
</head>
<body class="bg-gray-100 text-gray-800">
<h2>Mes oeuvres</h2>

<section class='gallery'>
    <?php 
    $galleries = [
        'La reponse imprevue' => 'images/galerie/img1.png',
        'Le faux miroir' => 'images/galerie/img2.png',
        'Le chateau des pyrennes' => 'images/galerie/img3.png',
        'Le soir qui tombe' => 'images/galerie/img4.png',
        'Les valeurs personnel' => 'images/galerie/img5.png',
        'Les amoureux II' => 'images/galerie/img6.png',
        'L\'homme du large' => 'images/galerie/img7.png',
        'Golconde' => 'images/galerie/img8.png',
        'Le fils de l\'homme' => 'images/galerie/img9.png',
        'La duree poignardee' => 'images/galerie/img10.png',
        'La condition humaine' => 'images/galerie/img11.png',
        'La poitrine' => 'images/galerie/img12.png',
        'La trahison des images' => 'images/galerie/img13.png',
        'la chambre d ecoute' => 'images/galerie/img14.png',
    ];
    ?>

    <?php foreach ($galleries as $paintingName => $imgSource) : ?>
        <div class='gallery-item'>
            <img src=<?= $imgSource ?> alt=<?= $paintingName ?>>
        </div>
    <?php endforeach ?>
    
</section>
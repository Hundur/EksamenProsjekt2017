<div class="slide-container">
            
    <?php foreach ($slides as $slide) { ?> <!--En for loop som lager slides for hvor mange objekter du har i databasen -->
            
    <div class="Slide fade">
                
        <img src="<?= $slide['Bilde'] ?>" style="width:100%">
        <div class="textbox"> <!-- Tar informasjon fra databasen og legger inn data -->
            <h2><?= $slide['Navn'] ?></h2>
            <p><?= $slide['Beskrivelse'] ?></p>
            <br>
            <p>Avstand: <?= $slide['Avstand'] ?></p>
            <p>Åpningstid: <?= $slide['Open'] ?></p>
            <p>Stengetid: <?= $slide['Stengetid'] ?></p>
 			<br>
            <p><a href="<?= $slide['Lenke'] ?>">Lenke til nettsiden</a></p>
        </div>
            
    </div>   
    
    <a class="back" onclick="plusSlides(-1)">&#10094;</a> <!-- Fram og tilbake knappene i slide boksen -->
    <a class="forward" onclick="plusSlides(1)">&#10095;</a>

    <?php } ?>
            
</div>
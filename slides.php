        <div class="slide-container">
            
            <?php foreach ($slides as $slide) { ?>
            
            <div class="Slide fade">
                
                <img src="<?= $slide['Bilde'] ?>" style="width:100%">
	            <div class="textbox">
                     <h2><?= $slide['Navn'] ?></h2>
			         <p><?= $slide['Beskrivelse'] ?></p>
                     <br><p>Avstand: <?= $slide['Avstand'] ?></p>
                     <p>Åpningstid: <?= $slide['Open'] ?></p>
                     <p>Stengetid: <?= $slide['Stengetid'] ?></p>
 				     <br><p><a href="<?= $slide['Lenke'] ?>">Lenke til nettsiden</a></p>
                </div>
            
            </div>              
            <a class="back" onclick="plusSlides(-1)">&#10094;</a>
            <a class="forward" onclick="plusSlides(1)">&#10095;</a>

            <?php } ?>
            
        </div>
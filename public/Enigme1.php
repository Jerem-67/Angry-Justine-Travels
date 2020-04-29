
<form method="GET" action="#">

    <fieldset>

        <legend>Enigme 1 :</legend>
        <div>
            <!-- API -->
        </div>
        <div>
            <p>Indices</p>
        </div>
        <div>
            <div>
            <input type="radio" id="rep1" name="rep1">
                <label for="rep1"></label>
            </div>
            <div>
                <input type="radio" id="rep2" name="rep2">
                <label for="rep2"></label>
            </div>
            <div>
                <input type="radio" id="rep3" name="rep3">
                <label for="rep3"></label>
            </div>
            <div>
                <input type="radio" id="rep4" name="rep4">
                <label for="rep4"></label>
            </div>
        </div>
        <div>
            <input type="submit" name="send" id="send">
        </div>




    </fieldset>

</form>

<?php
if(!empty($_GET["send"])){
    if(!empty($_GET["rep3"])){
        echo "BRAVO ! Angry Justine a trouvé sa tasse de café :)";
        echo "<a href='Enigme2.php'>Next !</a>";
    }else{
        echo "Loupé ! Quel dommage...";
    }
}
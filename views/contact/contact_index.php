<div class="row">



    <h1>Kontakteeru:</h1>

    <div class="table-responsive">

        <table class="table table-striped table-bordered clickable-rows">

            <thead>
            <link rel="stylesheet" href="/views/contact/contact.css">
            <ul>
                <li><a href="default.asp">Home</a></li>
                <li><a href="news.asp">News</a></li>
                <li><a href="contact.asp">Contact</a></li>
                <li><a href="about.asp">About</a></li>
            </ul>

            </thead>

            <tbody>
            <div class="container">
                <form action="action_page.php">

                    <label for="fname">Eesnimi:</label>
                    <input type="text" id="fname" name="firstname" placeholder="Sisesta siia oma eesnimi..">

                    <label for="lname">Perekonnanimi:</label>
                    <input type="text" id="lname" name="lastname" placeholder="Sisesta siia oma perekonnanimi..">

                    <label for="country">Riik:</label>
                    <select id="country" name="country">
                        <option value="estonia">Eesti</option>
                        <option value="latvia">Latvia</option>
                        <option value="russia">Russia</option>
                    </select>

                    <label for="subject">Kirjuta tekst siia:</label>
                    <textarea id="subject" name="subject" placeholder="Kirjuta siia teksti.." style="height:200px"></textarea>

                    <input type="submit" value="Submit">

                </form>
            </div>

            </tbody>

        </table>

    </div>

</div>

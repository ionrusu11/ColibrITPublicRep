
<?= $this->extend('layouts/users') ;?>
<?= $this->section('content') ;?>


<div class="headerContainer">
    <div class="logo3"></div>
    <!--
    <div class="langSelect">
        <a href="" class="langOption selectedLang">Ro</a>
        <a href="" class="langOption">En</a>
    </div>
    -->
</div>
<div class="formContainer">


    <div class="form">
        <?= form_open_multipart('upload/upload') ?>
        <p class="inputTitle textMedium">Imagini</p>
        <label class="fileUpload">
            <input type="file" id="imageFile" name="imageFile" accept="image/*;capture=camera"/>
            <p class="textSmall">Încarcă imaginea obiectului</p>
            <p class="fileUploadSimbol">+</p>
        </label>
        <button id="submitButton" type="submit" class="submitButton textMedium">Incarca</button>
        </form>
        <form  method="post" action="<?= base_url('/save'); ?>">
            <?= csrf_field()?>

            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                <div class="alert alert-danger"> <?= session()->getFlashdata('fail'); ?> </div>
            <?php endif?>

            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success"> <?= session()->getFlashdata('success'); ?> </div>
            <?php endif?>

            <p class="inputTitle textBig">Informații referitor la obiect:</p>
            <div class="formSection">
                <?php if(!empty($pathName)):?>
                    <label class="inputTitle textMedium text-success">Upload cu success</label>

                <input type="hidden" name="image_url" value="<?= esc($pathName) ?>">
                <?php endif;?>

                <p class="inputTitle textMedium">Categoria</p>
                <select class="textarea" name="category">
                    <option value="danger">Obiect potențial periculos</option>
                    <option value="lost">Obiect potențial pierdut</option>
                    <option value="garbage">Gunoi</option>
                    <option value="other">Altele</option>
                </select>

                <label class="inputTitle textMedium">Descriere</label>
                <textarea id="description" class="textarea" name="description" >
                    It was a dark and stormy night...
            </textarea>

                <input type="hidden" id="geodata" name="geodata" placeholder="Adresa locației...">


                <script>
                    function json(url) {
                        return fetch(url).then(res => res.json());
                    }
                    let lat,long
                    let apiKey = '69ed07f274ff588f26453834f95250ea7ace3fc6b177c4da4714136a';
                    json(`https://api.ipdata.co?api-key=${apiKey}`).then(data => {
                        document.getElementById("geodata").value = JSON.stringify({
                            lat: data.latitude,
                            long: data.longitude
                        })
                    });

                </script>
            </div>


            <p class="inputTitle textBig">Date de contact:</p>
            <div class="formSection">

                <p class="inputTitle textMedium">Doriți să fiți anonim?</p>
                <input id="anonim" class="checkbox" type="checkbox" name="anonim" />

                <div id="contactDataContainer">
                    <label class="inputTitle textMedium" for="firstname">Nume</label>
                    <input type="text" id="firstname" name="firstname" class="personalDataInput" placeholder="Nume...">
                    <label class="inputTitle textMedium" for="lastname">Prenume</label>
                    <input type="text" id="lastname" name="lastname" class="personalDataInput" placeholder="Prenume...">
                    <label class="inputTitle textMedium" for="phone">Telefon</label>
                    <input type="tel" id="phone" name="phone" class="personalDataInput" placeholder="Telefon...">
                    <label class="inputTitle textMedium" for="email">Email</label>
                    <input type="email"id="email" name="email" class="personalDataInput" placeholder="Email...">
                </div>
            </div>

            <button id="submitButton" type="submit" class="submitButton textMedium">Trimite</button>
        </form>
    </div>

</div>


<div class="footerContainer">

    <div class="contact">
        <p>Contact:</p>
        <p>(206) 342-8631</p>
        <p>autority.mail@gmail.com</p>
    </div>

    <div class="logo2"></div>
</div>

<!--content-->
<?= $this->endSection() ;?>

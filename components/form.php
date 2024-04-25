<h2>Me contacter</h2>

<?php
    include 'components/result.php';
    include 'components/errors.php';
    include 'components/validate.php';
?>

<form action='' method='post'>
    
    <div class='form__field__color--shape form__email__layout'>
        <label for='email'>E-mail : </label>
        <input type='email' id='email' name='email' placeholder='jacques.wergifosse@mail.be' required></input>
    </div>

    <div class='form__field__color--shape form__subject__layout'>
        <label for='objet'>Objet du email : </label>
        <select id='objet' name='objet' required>
            <option value=''>--Quel est l'objet de votre email ?--</option>
            <option value='rendez_vous'>Je souhaite prendre un rendez vous</option>
            <option value='achat'>Je souhaite acheter une oeuvre</option>
            <option value='expertise'>Je souhaite faire expertiser une oeuvre</option>
            <option value='autre'>Autre</option>
        </select>
    </div>

    <div class='form__field__color--shape form__message__layout'>
        <label for='message'>Entre ton message :</label>
        <textarea type='text' id='message' name='message' placeholder='Cher petit, cher grand,
J ai reçu avec une rapidité inusitée ta correspondance, quelle débauche cette sacrée exposition nous fait passer dans le domaine épistolier ! Pour résumer donc une fois pour toutes : je te verrai à Liège samedi à la brune...' required ></textarea>
    </div>

    <div>
        <button class='button-74' role='button' type='submit' name='button'>Ceci n est pas un bouton</button>
    </div>
</form>
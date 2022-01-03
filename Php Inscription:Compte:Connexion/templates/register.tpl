{extends file='layout.tpl'}
{block name=title}Register{/block}
{block name=body}
<h1>Register</h1>
<div id='main'>
<form action="register" method="post">

    <label><b>Nom</b></label><br />
    <input type="nom" placeholder="Nom" name="nom" value={$data.nom|escape|default:''}><br />
    <span>{$messages['nom']|escape|default:""}</span><br />

    <label><b>Email</b></label><br />
    <input type="email" placeholder="Adresse valide" name="email" value={$data.email|escape|default:''}><br />
    <span>{$messages['email']|escape|default:""}</span><br />

    <label ><b>Password</b></label><br />
    <input type="password" placeholder="Minimum 8 caractères" name="psw"><br />
    <span>{$messages['psw']|escape|default:""}</span><br />

    <label><b>Ville</b></label><br />
    <input type="ville" placeholder="Ville" name="ville" value={$data.ville|escape|default:''}><br />
    <span>{$messages['ville']|escape|default:""}</span><br />

    <label><b>Pays</b></label><br />
    <input type="Pays" placeholder="Pays" name="pays" value={$data.pays|escape|default:''}><br />
    <span>{$messages['pays']|escape|default:""}</span><br /> <br />

    <button type="submit">Sign in</button><br />
</form>
</div>
{/block}
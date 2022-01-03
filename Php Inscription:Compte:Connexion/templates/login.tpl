{extends file='layout.tpl'}
{block name=title}Login{/block}
{block name=body}
<div id='main'>
<h1>Login</h1>
<form action="login" method="post">

    <label><b>Email</b></label><br />
    <input type="email" placeholder="Adresse valide" name="email" value={$data.email|escape|default:''}><br />
    <span>{$messages['email']|escape|default:""}</span><br />

    <label ><b>Password</b></label><br />
    <input type="password" placeholder="Minimum 8 caractères" name="psw"><br />
    <span>{$messages['psw']|escape|default:""}</span><br />

    <button type="submit">Sign in</button><br />

</form>
</div>
{/block}
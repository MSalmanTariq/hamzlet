<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.min.js"></script>
<script>
function makeKey() {
    return Math.round((new Date().valueOf() * Math.random())) + '';
}
	let key =makeKey();
	let om ="plz";
	let ct = CryptoJS.HmacSHA1(om, key);
	var encrypted = CryptoJS.AES.encrypt(om, key);
	var decrypted = CryptoJS.AES.decrypt(encrypted.toString(), key);
	console.log(encrypted, decrypted ,encrypted.toString(),decrypted.toString(CryptoJS.enc.Utf8));
</script>

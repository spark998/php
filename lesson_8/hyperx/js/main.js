function adminDelGood(id) {
	var str = "adminDelGood=" + id;
    $.ajax({
        url: '../controllers/adminControl.php', 
        type: 'POST', 
        data: str, 
        error: function (req, text, error) {
            alert('Ошибка!' + text + ' | ' + error);
		}
    });
};
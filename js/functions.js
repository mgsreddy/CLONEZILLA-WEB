$(function(){
	

	// Neue Zeile an erste Stelle der Tabelle hinzufügen zum Hinzufügen von Daten
	$(".add_row").click(function() {
		$("table tr").first().after(editTemplate);
		addEvents();
	});
	
	function addEvents() {
		
		
		// Entfernt eine Zeile
		$(".delete_row").click(function() {
			
			var id = $(this).parent().parent().find("td:first").html();
			$(this).parent().parent().remove(); // Mit parent wird 2 Objekte höher gegangen um die komplette Zeile zu löschen nicht nur den löschen Button
			$.post("index.php", { "action": "delete_row", "id": id }, function(){
				
			});
		});
	}
	
	addEvents();
});
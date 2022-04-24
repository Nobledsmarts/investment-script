$('.record-table.record-export').DataTable({
	dom: 'Bfrtip',
    "order": [
    ],
    // "displayLength": 25,
	buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
});
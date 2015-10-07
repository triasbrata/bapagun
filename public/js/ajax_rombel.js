$('#form_rombel .select').on('change',function  () {
	"user strict";
	var $this = $(this),
		form = $("#form_rombel");
	$.ajax({
		url : form.attr('action'),
		type : form.attr('method'),
		data : form.serialize(),
		success:function  (hasil) {
			var cbx = hasil.combobox,
				dataSiswa = hasil.siswa,
				otable = window.dtable,
				elementSelectBox = $("[name='"+$this.data('nextChain')+"']");
			if( elementSelectBox != undefined){
				elementSelectBox.removeAttr('disabled');
				$.each(cbx, function(nameSelect, value) {
					if(nameSelect == $this.data('nextChain')){
						elementSelectBox.html('');
						elementSelectBox.append($('<option>').text('Pilih '+ nameSelect));
						$.each(value, function(i,v) {
							elementSelectBox.append($('<option>').val(v.id).text(v.val));
						});
						elementSelectBox.select2();
						$('#form_rombel .select option:first').attr('disabled','disabled');
						console.log(nameSelect);
					}
				});
				
				otable.fnClearTable();
				var checkboxer = function () {
					return '<div class="checkbox checkbox-inline checkbox-styled"><label><input type="checkbox" value="'+value+'" name="siswa_id['+nomor+']"><input type="checkbox" value="'+value+'" name="rombel_id['+nomor+']"><span></span></label></div>';
				}
				$.each(dataSiswa, function(index, val) {
					 otable.fnAddData([
					 	index+1,
					 	"<\input type='checkbox' name='siswa_id[]' value='"+val.siswa_id+"'\>"+val.nama,
					 	val.tahun_ajaran,
					 	val.kelas,
					 	val.jurusan,
					 	val.ruangan,
					 	val.semester
					 ]);
				});
			}
		},
		error:function  () {
		}
	})
})

//# sourceMappingURL=ajax_rombel.js.map
/**
 * jQuery para validar y seleccionar Categoría y Tallas
 */
var CategoriasYTallas = {

	"categorias": [{
			"NombreCategoria": "Infantil niña",
			"tallas": ["0 meses", "3 meses", "6 meses", "12 meses", "2-3 años", "4-5 años", "6-7 años", "8-9 años", "10-11 años", "12-14 años"]
	},
		{
			"NombreCategoria": "Infantil niño",
			"tallas": ["0 meses", "3 meses", "6 meses", "12 meses", "2-3 años", "4-5 años", "6-7 años", "8-9 años", "10-11 años", "12-14 años"]
	},
		{
			"NombreCategoria": "Infatil unisex",
            "tallas": ["0 meses", "3 meses", "6 meses", "12 meses", "2-3 años", "4-5 años", "6-7 años", "8-9 años", "10-11 años", "12-14 años"]
    },
		{
			"NombreCategoria": "Mujer",
			"tallas": ["XS", "S", "M", "L", "XL", "XXL"]
	},
		{
			"NombreCategoria": "Hombre",
			"tallas": ["XS", "S", "M", "L", "XL", "XXL"]
	},
		{
			"NombreCategoria": "Adulto unisex",
			"tallas": ["XS", "S", "M", "L", "XL", "XXL"]
	}]
}


jQuery(document).ready(function () {

	var iCategoria = 0;
	var htmlCategoria = '<option value="sin-categoria">Seleccione categoria</option><option value="sin-categoria">--</option>';
	var htmlTalla = '<option value="sin-categoria">Seleccione talla</option><option value="sin-categoria">--</option>';

	jQuery.each(CategoriasYTallas.categorias, function () {
		htmlCategoria = htmlCategoria + '<option value="' + CategoriasYTallas.categorias[iCategoria].NombreCategoria + '">' + CategoriasYTallas.categorias[iCategoria].NombreCategoria + '</option>';
		iCategoria++;
	});

	jQuery('#categoria, #categoria-solicitante').html(htmlCategoria);
	jQuery('#talla, #talla-solicitante').html(htmlTalla);

	jQuery('#categoria, #categoria-solicitante').change(function () {
		var iCategoria = 0;
		var valorCategoria = jQuery(this).val();
		var htmlTalla = '<option value="sin-talla">Seleccione talla</option><option value="sin-talla">--</option>';
		jQuery.each(CategoriasYTallas.categorias, function () {
			if (CategoriasYTallas.categorias[iCategoria].NombreCategoria == valorCategoria) {
				var iTallas = 0;
				jQuery.each(CategoriasYTallas.categorias[iCategoria].tallas, function () {
					htmlTalla = htmlTalla + '<option value="' + CategoriasYTallas.categorias[iCategoria].tallas[iTallas] + '">' + CategoriasYTallas.categorias[iCategoria].tallas[iTallas] + '</option>';
					iTallas++;
				});
			}
			iCategoria++;
		});
		jQuery('#talla, #talla-solicitante').html(htmlTalla);
	});
	jQuery('#talla, #talla-solicitante').change(function () {
		if (jQuery(this).val() == 'sin-categoria') {
			alert('Debes seleccionar Categoria');
		} else if (jQuery(this).val() == 'sin-talla') {
			alert('Debes seleccionar Talla');
		}
	});
	jQuery('#categoria, #categoria-solicitante').change(function () {
		if (jQuery(this).val() == 'sin-categoria') {
			alert('Debe seleccionar Categoria');
		}
	});

});
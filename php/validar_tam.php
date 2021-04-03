<!DOCTYPE html>
<html lang="es-ar">
<head>
<meta charset="utf-8" />
<title>Tamaño archivo</title>
</head>
<body>
<form action="#">
<input type="file" id="archivos" name="archivos[]" multiple />
<output id="lista">
    
</output>
</form>
<script>
  function archivoSeleccionado(evt) {
  if(window.File && window.FileReader && window.FileList && window.Blob){
    var archivos = evt.target.files; 
    var salida = [];
    for (var i = 0, f; f = archivos[i]; i++) {
      salida.push('<li>',f.size, ' bytes','</li>');
    }
    document.getElementById('lista').innerHTML = '<ul>' + salida.join('') + '</ul>';


 
}else{
// solo IE, no funciona con archivos multiples
    var Fs = new ActiveXObject("Scripting.FileSystemObject");
    var ruta = document.getElementById('archivos').value;
    var archivo = Fs.getFile(ruta);
    var size = archivo.size;
document.getElementById('lista').innerHTML = '<br \/>' +size + " bytes";
}
 
}
document.getElementById('archivos').addEventListener('change', archivoSeleccionado, false);
</script>
</body>
</html>
<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 

// Mostrar y ocultar botones de los servicios


for (let producto = 1; producto <= 7; producto++) {
	if(screen.width > 999){
		document.getElementById("containerProducto"+producto).addEventListener("mouseenter", function(){
			document.getElementById("btnProducto"+producto).classList.remove ("none");
		})
		document.getElementById("containerProducto"+producto).addEventListener("mouseleave", function(){
			document.getElementById("btnProducto"+producto).classList.add ("none");
		})
	}
    else if(screen.width < 999){
		document.getElementById("containerProducto"+producto).addEventListener("click", function(){
		document.getElementById("btnProducto"+producto).classList.toggle ("show");
	}) 
	}  
}</script>
<!-- end Simple Custom CSS and JS -->

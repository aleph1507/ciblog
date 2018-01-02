		</div>

		<script type="text/javascript">
			ClassicEditor
   				.create( document.querySelector( '.cked' ) )
    			.then( editor => {
     				   console.log( editor );
    			} )
    			.catch( error => {
        			console.error( error );
    			} );

    			ClassicEditor.config.autoGrow_onStartup = true;
    			ClassicEditor.config.width = '500';
				ClassicEditor.config.height = '600';
		</script>
	</body>
</html>
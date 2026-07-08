<?php echo app('Illuminate\Foundation\Vite')(['resources/css/footer_style.css']); ?>
    <footer class="main-footer">
    
    <div class="footer-section contact-info">
        <h3>Contacto</h3>
        <p>Dirección: Calle 123, Municipio, Estado</p>
        <p>Teléfono: (00) 1234 5678</p>
        <p>Email: contacto@astrocuts.com</p>
    </div>

    <div class="footer-section legal-copy">
        <p class="copyright">
            &copy; <?php echo e(date('Y')); ?> AstroCuts. Todos los derechos reservados.
        </p>
        <a href="<?php echo e(url('/')); ?>">Página principal</a>
    </div>
    
	</footer>
<?php /**PATH /home/diana/Workspace/PHP/Laravel/ProyectoBarberia/resources/views/includes/footer.blade.php ENDPATH**/ ?>
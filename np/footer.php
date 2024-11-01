    </div><!-- end .container .wrapper -->

  </main><!-- end main #primary .entry-content -->

  <footer id="footer" role="contentinfo"><!-- footer #footer -->

    <?php get_template_part( '/template-parts/content', 'social' );

      get_template_part( '/template-parts/content', 'copyright' ); ?>
    </p>

  </footer><!-- end footer #footer -->

  <!-- gets current copyright year -->
  <script type="text/javascript">document.getElementById("year").innerText = new Date().getFullYear();</script>
  <?php wp_footer(); ?>

 <!-- Sparks and Fuel footer link -->
<div style="margin: auto; width: 60%; display: flex; justify-content: center;">
	<p style="font-family: 'Rubik', Sans-serif; color: #ffffff50; font-size: .75em;">Site maintained by <a href="https://sparksandfuel.com" target="_blank" rel="noopener">Sparks and Fuel</a></p>
</div>

</body>
</html>
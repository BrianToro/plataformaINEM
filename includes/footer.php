<!-- Inicio de pie de pagina general -->

<footer class="footer">
            <hr>
            <p>© 2020 INEM José Félix de Restrepo</p>
        </footer>
    </div>
    <!-- <script src="/js/main.js" type="text/javascript"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function handleClick(cont){
            postForm(cont);
        }

        function postForm(cont){
            const method = 'POST';
            const action = 'login.php';
            const arg = 'in' + cont;
            let form = document.createElement('form');
            form.setAttribute('method', method);
            form.setAttribute('action', action);
            let hiddenField = document.createElement('input');
            hiddenField.setAttribute('type', 'hidden');
            hiddenField.setAttribute('name', arg);
            form.appendChild(hiddenField);
            document.body.appendChild(form);
            form.submit();
        }
    </script>
</body>
</html>

<!-- fin del pie de pagina general -->
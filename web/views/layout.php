<!DOCTYPE html>
<html lang="en">
	<head>
		{% include 'header.html' %}
	</head>
	<body>
		<div id="container">
			
			{% include 'nav.html' %}
			
			{% block content %}{% endblock %}

			{% include 'footer.html' %}
		</div>
	</body>
</html>
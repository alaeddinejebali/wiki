<div class="contentpanel" id="wiki">
	<div class="row-fluid">
		<div class="span12">
			<h1 class="wiki-title page-header"><span id="btnShowHideAllArticles" data-article-visibility="off" class="iconfa-plus-sign"></span> Tips and trics Web</h1>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">How to create a virtual host on Xampp?<h1>
				</div>
				<div class="wiki-article-body invisible">
					<p>The goal is to acceed <a href="#">http://localhost:8081/jebalialaeddine.com</a> using <a href="#">http://jebalialaeddine.dev:8081</a></p>
					<h2>Update httpd-vhosts.conf</h2>
					<p>
						<ol>
							<li>
								Go to "C:\xampp\apache\conf\extra\httpd-vhosts.conf", arround Line-19, add (or uncomment) this line
								NameVirtualHost *:8081
							</li>
							<li>
								At the bottom of the file add
								<pre>
									<code class="xml">
										#Make "http://localhost:8081/jebalialaeddine.com" accessible via "http://jebalialaeddine.dev:8081"
										<VirtualHost *:8081>
										    ServerAdmin alaeddine.jebali@whitecapetech.com
										    DocumentRoot "C:/xampp/htdocs/jebalialaeddine.com"
										    ServerName jebalialaeddine.dev
										    ServerAlias jebalialaeddine.dev
										    <Directory "C:/xampp/htdocs/jebalialaeddine.com">
										        Order allow,deny
										        Allow from all
										    </Directory>
										</VirtualHost>
									</code>
								</pre>
							</li>
							<li>
						</ol>
					</p>
					<h2>Update hosts file</h2>
					<p>
						<ol>
							<li>Open Notepad++ as Administrator</li>
							<li>Open "C:\Windows\System32\drivers\etc\hosts"</li>
							<li>
								Go to the bottom of the file and add:
								<pre>
									<code class="xml">		
										127.0.0.1       localhost
										127.0.0.1       jebalialaeddine.dev
									</code>
								</pre>
							</li>
							<li>Restart Apache</li>
						</ol>
					</p>
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">How to change default Xampp port?<h1>
				</div>
				<div class="wiki-article-body invisible">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget orci eget erat convallis pellentesque. Nullam tortor mi, molestie quis auctor eu, sodales posuere nulla. Nam vestibulum fringilla urna. Nullam quam urna, sodales sed sem malesuada, iaculis lobortis neque. Phasellus et mi in velit fermentum varius et in sem. Morbi vel quam tempus felis bibendum posuere ut sit amet sem. Phasellus accumsan diam a cursus ultricies. Etiam vehicula lorem enim, vel imperdiet leo accumsan et. Integer iaculis risus lacus. Quisque vel ipsum non lorem varius efficitur vel at ante. Donec ultrices lorem odio. Donec vel tellus ac purus tempus feugiat non ac nulla. Mauris varius dolor eget mattis sollicitudin
				</div>
			</section>
			<section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">This is title 3?<h1>
				</div>
				<div class="wiki-article-body invisible">
					Aenean elementum tempus ligula, egestas posuere purus mollis nec. Nullam vehicula blandit tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Aenean congue tellus dui, quis auctor elit commodo non. Quisque eget faucibus diam, id mollis ipsum. Morbi laoreet dolor odio, non suscipit nisi eleifend eget. Praesent volutpat, quam quis maximus euismod, nisi ante aliquet odio, eu feugiat ligula metus eu odio. Integer venenatis porttitor sapien. Aliquam auctor enim vitae convallis volutpat. 
				</div>
			</section>
		</div>
	</div>
</div>




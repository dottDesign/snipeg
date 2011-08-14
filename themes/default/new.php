<?php include('header.php'); ?>

<?php include('top.php'); ?>

<div id="main" class="container_12">

	<div id="new">

		<h1><?php echo $Lang->addsnippetpage; ?></h1>

		<form method="post" action="" id="add-snippet">

			<div id="add-snippet-main" class="grid_7">

				<label for id="snippet-name">Title</label>
				<div class="clear"></div>
				<input type="text" name="name" id="snippet-name" autofocus />
				<div class="clear"></div>

				<label for id="snippet-description">Description</label>
				<div class="clear"></div>
				<input type="text" name="description" id="snippet-description" />
				<div class="clear"></div>

				<label for id="snippet-tags">Tags (comma separated)</label>
				<div class="clear"></div>
				<input type="text" name="tags" id="snippet-tags" />
				<div class="clear"></div>

				<label for="snippet-content">Code</label>
				<div class="clear"></div>
				<textarea name="content" id="snippet-content"></textarea>
				<div class="clear"></div>

				<input type="submit" name="addsnippet" value="Add new snippet" />

			</div>

			<div id="add-snippet-side" class="prefix_1 grid_4">

				<label for="new-category">Create category</label>
				<div class="clear"></div>
				<input type="text" name="newcategory" id="new-category" placeholder="New category name" />
				<div class="clear"></div>

				<label for="snippet-category">Or choose existing category</label>
				<div class="clear"></div>
				<select name="category" id="snippet-category">
					<option name="default">Default</option>
					<option name="miscellaneous">Miscellaneous</option>
					<option name="wordpress">Wordpress</option>
				</select>
				<div class="clear"></div>

				<label for="snippet-language">Programming Language</label>
				<div class="clear"></div>
				<select name="language" id="snippet-language">
						<option name="html">HTML</option>
						<option name="php">PHP</option>
						<option name="js">Javascript</option>
				</select>
				<div class="clear"></div>

				<label for="snippet-is-public">Snippet privacy</label>
				<div class="clear"></div>

				<fieldset id="radio-fieldset">

					<input type="radio" name="private" id="snippet-is-public" value="0" checked="checked"/><label for="snippet-is-public">Set public</label>
					<div class="clear"></div>

					<input type="radio" name="private" id="snippet-is-private" value="1"/><label for="snippet-is-private">Keep private</label>
					<div class="clear"></div>

				</fieldset>

			</div>

		</form>

	</div>

</div>

<?php include('footer.php'); ?>
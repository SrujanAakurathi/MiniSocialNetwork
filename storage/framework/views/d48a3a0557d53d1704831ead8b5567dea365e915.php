<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					Edit Article
				</div>
				<div class="panel-body">

					<form action="/articles/<?php echo e($article->id); ?>" method="POST">

						<?php echo e(method_field('PUT')); ?>


						<?php echo e(csrf_field()); ?>


						<input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
						<div class="form-group">
						<label for="content">Content</label>

						<textarea name="content" class="form-control"><?php echo e($article->content); ?></textarea>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="live" <?php echo e($article->live == 1 ? 'checked' : ''); ?>>Live
						</label>
					</div>

					<div class="form-group">
						<label for="post_on">Post on</label>

						<input type="datetime-local" name="post_on" class="form-control" value="<?php echo e($article->post_on->format('Y-m-d\TH:i:s')); ?>">
					</div>
					<input type="submit" class="btn btn-success pull-right">
					</form>

					



					
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
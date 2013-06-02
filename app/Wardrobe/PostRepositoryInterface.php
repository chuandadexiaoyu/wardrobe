<?php namespace Wardrobe;

interface PostRepositoryInterface {

	/**
	 * Get all of the posts.
	 *
	 * @return array
	 */
	public function all();

	/**
	 * Get a Post by its primary key.
	 *
	 * @param  int   $id
	 * @return Post
	 */
	public function find($id);

	/**
	 * Get a Post by its slug
	 *
	 * @param  string   $slug
	 * @return Post
	 */
	public function findBySlug($slug);

	/**
	 * Create a new post.
	 *
	 * @param  string  $title
	 * @param  string  $content
	 * @return Post
	 */
	public function create($title, $content, $slug);

	/**
	 * Update a post's title and content.
	 *
	 * @param  int  $post
	 * @param  string  $title
	 * @param  string  $content
	 * @return Post
	 */
	public function update($id, $title, $content, $slug);

	/**
	 * Delete the post with the given ID.
	 *
	 * @param  int  $id
	 * @return void
	 */
	public function delete($id);

}

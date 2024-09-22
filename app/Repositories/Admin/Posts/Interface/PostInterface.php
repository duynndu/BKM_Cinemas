<?php

namespace App\Repositories\Admin\Posts\Interface;

interface PostInterface
{
    public function allFillter($request);

    public function getListCategoryPost();

    public function listTags();

    public function createPost($data);

    public function checkExitsTags($tagName);

    public function deleteRecordPostTagByPost($postId, $tagsToRemove);

    public function attachTagIfNotExists($record, $tagId);

    public function updatePost($data, $id);

    public function updateAllRecordPostTagByPost($tagId);

    public function getAllRecordBySoftDeleted($postId, $tagIds);

    public function getPostById($id);

    public function categoryOfPost($id);

    public function tagsSelected($id);

    public function deleteCategoryPostByPost($record, $existingCategoryId);

    public function checkExitsCategoryPost($record, $categoryId);

    public function createCategoryPost($record, $data);

    public function createRelatedPhotoPost($record, $data);

    public function getImageRelatedPhotoById($id);

    public function delete($id);
}

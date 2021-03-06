<?php

namespace Codbear\Alaska\Models\ViewModels;

class CommentViewModel
{
    public $reporting = 0;
    public $reported = 0;

    public function __get($attribute)
    {
        $method = 'get' . ucfirst($attribute);
        $this->$attribute = $this->$method();
        return $this->$attribute;
    }

    public function setReporting(int $reporting)
    {
        $this->reporting = $reporting;
    }

    public function setReported()
    {
        $this->reported = 1;
    }

    private function getDeleteUrl()
    {
        return '/?view=commentsPanel&action=deleteComment&commentId=' . $this->id;
    }

    private function getReportUrl()
    {
        return '/?view=book&chapterId=' . $this->chapter_id . '&action=reportComment&commentId=' . $this->id;
    }

    private function getValidateUrl()
    {
        return '/?view=commentsPanel&action=validateComment&commentId=' . $this->id;
    }
}

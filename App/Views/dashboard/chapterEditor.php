<?php

use Codbear\Alaska\Models\ChapterModel; ?>

<div class="row">
    <div class="col s10 offset-s1">
        <div class="row">
            <h2>Editeur de chapitre</h2>
        </div>
        <form action="?view=chapterEditor&action=saveChapter&chapterId=<?= $chapter->id ?>" method="post">
            <div class="card">
                <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                        <li class="tab"><a class="blue-grey-text text-darken-4 active" href="#chapter-metadatas">Métadonnées</a></li>
                        <li class="tab"><a class="blue-grey-text text-darken-4" href="#chapter-content">Contenu</a></li>
                    </ul>
                </div>
                <div class="card-content">
                    <div id="chapter-metadatas">
                        <div class="row">
                            <div class="input-field col s12 xl8 offset-xl2">
                                <input type="text" name="chapter-title" id="chapter-title" class="validate" value="<?= $chapter->title ?>" required>
                                <label for="chapter-title">Titre</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 xl2 offset-xl2">
                                <input type="number" name="chapter-number" id="chapter-number" class="validate" value="<?= $chapter->number ?>" required>
                                <label for="chapter-number">Chapitre n°</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 xl8 offset-xl2">
                                <textarea class="tiny-editor" name="chapter-excerpt" id="chapterExcerpt"><?= $chapter->excerpt ?></textarea>
                                <label for="chapter-excerpt">Extrait</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m4 offset-m2">
                                <p>Date de création : <?= $chapter->creation_date_fr ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="chapter-content">
                    <div class="row">
                        <div class="col s10 offset-s1">
                            <textarea class="tiny-editor" name="chapter-content" id="chapterContent"><?= $chapter->content ?></textarea>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large red">
                    <i class="large material-icons">add</i>
                </a>
                <ul>
                    <li>
                        <a href="?view=chaptersPanel&action=moveChapterToTrash&chapterId=<?= $chapter->id ?>" class="btn-floating red">
                            <i class="material-icons">delete</i>
                        </a>
                    </li>
                    <?php if ($chapter->status != ChapterModel::STATUS_PUBLISHED) : ?>
                        <li>
                            <button type="submit" formaction="/?view=chapterEditor&action=publishChapter&chapterId=<?= $chapter->id ?>" class="btn-floating blue">
                                <i class="material-icons">publish</i>
                            </button>
                        </li>
                    <?php endif ?>
                    <li>
                        <button type="submit" class="btn-floating green"><i class="material-icons">save</i></button>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</div>

<script src="public/scripts/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="public/scripts/chapterEditor.js"></script>
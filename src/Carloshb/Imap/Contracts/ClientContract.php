<?php

namespace Carloshb\Imap\Contracts;

interface ClientContract {
    public function connect(array $options) : bool;

    public function getFolders() : array;

    public function getFolder(string $folder) : FolderContract;
}

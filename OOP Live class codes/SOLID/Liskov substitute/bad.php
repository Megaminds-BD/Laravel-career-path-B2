<?php

// Liskov Substitution Principle

// Child class must follow all the behaviours of Parent class

class File {
    public function read()
    {

    }

    public function write()
    {
        //
    }
}

class ReadOnlyFile extends File {
    public function write()
    {
        throw new Exception("Can not write to read only file");
    }
}

class FileProcessor {
    public function writeToFile(File $file)
    {
        $file->write();// Exception
    }
}

new FileProcessor(new ReadOnlyFile());
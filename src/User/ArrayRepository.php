<?php
namespace Chadicus\User;

class ArrayRepository implements RepositoryInterface
{
    /**
     * Location of the stored users array.
     *
     * @var string
     */
    private $file;

    /**
     * Array of all users
     *
     * @var array
     */
    private $users;

    /**
     * Construct a new Array Repository
     *
     * @param string $file The name of the file containing user data
     *
     * @throws \UnexpectedValueException Thrown if $file contains invalid json
     */
    public function __construct($file)
    {
        if (!file_exists($file)) {
            touch($file);
        }

        $this->file = $file;

        $json = file_get_contents($this->file);

        if (strlen($json) === 0) {
            $this->users = [];
            return;
        }

        $this->users = json_decode($json, true);

        if ($this->users === null) {
            throw new \UnexpectedValueException("{$file} contains invalid json.");
        }
    }

    /**
     * Finds a user in the data storage
     *
     * @param string $id The id of the user to find.
     *
     * @return User
     *
     * @throws Exception Thrown if no user is found with the $id
     */
    public function find($id)
    {
        if (!array_key_exists($id, $this->users)) {
            throw new \Exception("User with id {$id} was not found");
        }

        $user = new User();
        $user->setId($id);
        $user->setName($this->users[$id]['name']);
        $user->setBirthDay(new \DateTime($this->users[$id]['birthday']));
        $user->setEmail($this->users[$id]['email']);
        return $user;
    }

    public function create(User $user)
    {
        $id = uniqid();

        $this->users[$id] = [
            'name' =>  $user->getName(),
            'birthday' => $user->getBirthday()->format('c'),
            'email' => $user->getEmail(),
        ];

        $user->setId($id);
        $this->persist();
    }

    public function update(User $user)
    {
        $this->users[$user->getId()] = [
            'name' =>  $user->getName(),
            'birthday' => $user->getBirthday()->format('c'),
            'email' => $user->getEmail(),
        ];
        $this->persist();
    }

    public function delete(User $user)
    {
        unset($this->users[$user->getId()]);
        $this->persist();
    }

    private function persist()
    {
        file_put_contents($this->file, json_encode($this->users));
    }

    public function __destruct()
    {
        $this->persist();
    }
}

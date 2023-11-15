
<?php

use Intervention\Image\Facades\Image;


class Reparation {
    private int $id;
    private string $nameWorkshop;
    private string $registerDate;
    private string $licensePlate;
    private Image $photo;

    /**
     * Get the ID of the reparation.
     *
     * @return int The ID of the reparation.
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Set the ID of the reparation.
     *
     * @param int $id The ID of the reparation.
     * @return void
     */
    public function setId(int $id): void {
        $this->id = $id;
    }

    /**
     * Get the name of the workshop where the reparation was done.
     *
     * @return string The name of the workshop.
     */
    public function getNameWorkshop(): string {
        return $this->nameWorkshop;
    }

    /**
     * Set the name of the workshop where the reparation was done.
     *
     * @param string $nameWorkshop The name of the workshop.
     * @return void
     */
    public function setNameWorkshop(string $nameWorkshop): void {
        $this->nameWorkshop = $nameWorkshop;
    }

    /**
     * Get the registration date of the reparation.
     *
     * @return string The registration date of the reparation.
     */
    public function getRegisterDate(): string {
        return $this->registerDate;
    }

    /**
     * Set the registration date of the reparation.
     *
     * @param string $registerDate The registration date of the reparation.
     * @return void
     */
    public function setRegisterDate(string $registerDate): void {
        $this->registerDate = $registerDate;
    }

    /**
     * Get the license plate of the vehicle repaired.
     *
     * @return string The license plate of the vehicle.
     */
    public function getLicensePlate(): string {
        return $this->licensePlate;
    }

    /**
     * Set the license plate of the vehicle repaired.
     *
     * @param string $licensePlate The license plate of the vehicle.
     * @return void
     */
    public function setLicensePlate(string $licensePlate): void {
        $this->licensePlate = $licensePlate;
    }

    /**
     * Get the photo or image of the reparation.
     *
     * @return string The photo or image of the reparation (stored as a BLOB).
     */
    public function getPhoto(): Image {
        return $this->photo;
    }

    /**
     * Set the photo or image of the reparation.
     *
     * @param string $photo The photo or image data to be stored as a BLOB.
     * @return void
     */
    public function setPhoto(Image $photo): void {
        $this->photo = $photo;
    }
}
?>

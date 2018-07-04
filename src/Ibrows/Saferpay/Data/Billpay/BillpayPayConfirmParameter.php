<?php

namespace Ibrows\Saferpay\Data\Billpay;

use Ibrows\Saferpay\Data\Collection\AbstractCollectionItem;

class BillpayPayConfirmParameter extends AbstractCollectionItem implements BillpayPayConfirmParameterInterface
{
    /**
     * @param string $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->set('COMPANY', $company);

        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->get('COMPANY');
    }

    /**
     * @param string $legalform
     * @return $this
     */
    public function setLegalform($legalform)
    {
        $this->set('LEGALFORM', $legalform);

        return $this;
    }

    /**
     * @return string
     */
    public function getLegalform()
    {
        return $this->get('LEGALFORM');
    }

    /**
     * @param string $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->set('GENDER', $gender);

        return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->get('GENDER');
    }

    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->set('FIRSTNAME', $firstname);

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->get('FIRSTNAME');
    }

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->set('LASTNAME', $lastname);

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->get('LASTNAME');
    }

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->set('STREET', $street);

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->get('STREET');
    }

    /**
     * @param string $addressAddition
     * @return $this
     */
    public function setAddressAddition($addressAddition)
    {
        $this->set('ADDRESSADDITION', $addressAddition);

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressAddition()
    {
        return $this->get('ADDRESSADDITION');
    }

    /**
     * @param string $zip
     * @return $this
     */
    public function setZip($zip)
    {
        $this->set('ZIP', $zip);

        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->get('ZIP');
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->set('CITY', $city);

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->get('CITY');
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->set('COUNTRY', $country);

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->get('COUNTRY');
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->set('EMAIL', $email);

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->get('EMAIL');
    }

    /**
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->set('PHONE', $phone);

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->get('PHONE');
    }

    /**
     * @param int $dateofBirth
     * @return $this
     */
    public function setDateofBirth($dateofBirth)
    {
        $this->set('DATEOFBIRTH', $dateofBirth);

        return $this;
    }

    /**
     * @return int
     */
    public function getDateofBirth()
    {
        return $this->get('DATEOFBIRTH');
    }

    /**
     * @param string $deliveryGender
     * @return $this
     */
    public function setDeliveryGender($deliveryGender)
    {
        $this->set('DELIVERY_GENDER', $deliveryGender);

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryGender()
    {
        return $this->get('DELIVERY_GENDER');
    }

    /**
     * @param string $deliveryFirstname
     * @return $this
     */
    public function setDeliveryFirstname($deliveryFirstname)
    {
        $this->set('DELIVERY_FIRSTNAME', $deliveryFirstname);

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryFirstname()
    {
        return $this->get('DELIVERY_FIRSTNAME');
    }

    /**
     * @param string $deliveryLastname
     * @return $this
     */
    public function setDeliveryLastname($deliveryLastname)
    {
        $this->set('DELIVERY_LASTNAME', $deliveryLastname);

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryLastname()
    {
        return $this->get('DELIVERY_LASTNAME');
    }

    /**
     * @param string $deliveryStreet
     * @return $this
     */
    public function setDeliveryStreet($deliveryStreet)
    {
        $this->set('DELIVERY_STREET', $deliveryStreet);

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryStreet()
    {
        return $this->get('DELIVERY_STREET');
    }

    /**
     * @param string $deliveryAddressAddition
     * @return $this
     */
    public function setDeliveryAddressAddition($deliveryAddressAddition)
    {
        $this->set('DELIVERY_ADDRESSADDITION', $deliveryAddressAddition);

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddressAddition()
    {
        return $this->get('DELIVERY_ADDRESSADDITION');
    }

    /**
     * @param string $deliveryZip
     * @return $this
     */
    public function setDeliveryZip($deliveryZip)
    {
        $this->set('DELIVERY_ZIP', $deliveryZip);

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryZip()
    {
        return $this->get('DELIVERY_ZIP');
    }

    /**
     * @param string $deliveryCity
     * @return $this
     */
    public function setDeliveryCity($deliveryCity)
    {
        $this->set('DELIVERY_CITY', $deliveryCity);

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCity()
    {
        return $this->get('DELIVERY_CITY');
    }

    /**
     * @param string $deliveryCountry
     * @return $this
     */
    public function setDeliveryCountry($deliveryCountry)
    {
        $this->set('DELIVERY_COUNTRY', $deliveryCountry);

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCountry()
    {
        return $this->get('DELIVERY_COUNTRY');
    }

    /**
     * @param string $deliveryPhone
     * @return $this
     */
    public function setDeliveryPhone($deliveryPhone)
    {
        $this->set('DELIVERY_PHONE', $deliveryPhone);

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryPhone()
    {
        return $this->get('DELIVERY_PHONE');
    }

    /**
     * @return array
     */
    public function getFieldNames()
    {
        return array(
            'COMPANY',
            'LEGALFORM',
            'GENDER',
            'FIRSTNAME',
            'LASTNAME',
            'STREET',
            'ADDRESSADDITION',
            'ZIP',
            'CITY',
            'COUNTRY',
            'EMAIL',
            'PHONE',
            'DATEOFBIRTH',
            'DELIVERY_GENDER',
            'DELIVERY_FIRSTNAME',
            'DELIVERY_LASTNAME',
            'DELIVERY_STREET',
            'DELIVERY_ADDRESSADDITION',
            'DELIVERY_ZIP',
            'DELIVERY_CITY',
            'DELIVERY_COUNTRY',
            'DELIVERY_PHONE',
        );
    }

    public function getName()
    {
        return 'payconfirmparameter_billpay';
    }
}

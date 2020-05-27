<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatasetAtlas
 *
 * @ORM\Table(name="dataset_atlas")
 * @ORM\Entity
 */
class DatasetAtlas
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="UID", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Category", type="text", nullable=true)
     */
    private $category;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Sub_Category", type="text", nullable=true)
     */
    private $subCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Collection", type="text", nullable=true)
     */
    private $collection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="XPATH", type="text", nullable=true)
     */
    private $xpath;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name", type="text", nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Format", type="text", nullable=true)
     */
    private $format;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Content_Type", type="text", nullable=true)
     */
    private $contentType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Example_Content", type="text", nullable=true)
     */
    private $exampleContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MCHOICE_Values", type="text", nullable=true)
     */
    private $mchoiceValues;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Definitions", type="text", nullable=true)
     */
    private $definitions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Field_Type", type="text", nullable=true)
     */
    private $fieldType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Element_Type", type="text", nullable=true)
     */
    private $elementType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Parent", type="text", nullable=true)
     */
    private $parent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Attributed", type="text", nullable=true)
     */
    private $attributed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Children", type="text", nullable=true)
     */
    private $children;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Attributes", type="text", nullable=true)
     */
    private $attributes;

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getSubCategory(): ?string
    {
        return $this->subCategory;
    }

    public function setSubCategory(?string $subCategory): self
    {
        $this->subCategory = $subCategory;

        return $this;
    }

    public function getCollection(): ?string
    {
        return $this->collection;
    }

    public function setCollection(?string $collection): self
    {
        $this->collection = $collection;

        return $this;
    }

    public function getXpath(): ?string
    {
        return $this->xpath;
    }

    public function setXpath(?string $xpath): self
    {
        $this->xpath = $xpath;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }

    public function getExampleContent(): ?string
    {
        return $this->exampleContent;
    }

    public function setExampleContent(?string $exampleContent): self
    {
        $this->exampleContent = $exampleContent;

        return $this;
    }

    public function getMchoiceValues(): ?string
    {
        return $this->mchoiceValues;
    }

    public function setMchoiceValues(?string $mchoiceValues): self
    {
        $this->mchoiceValues = $mchoiceValues;

        return $this;
    }

    public function getDefinitions(): ?string
    {
        return $this->definitions;
    }

    public function setDefinitions(?string $definitions): self
    {
        $this->definitions = $definitions;

        return $this;
    }

    public function getFieldType(): ?string
    {
        return $this->fieldType;
    }

    public function setFieldType(?string $fieldType): self
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    public function getElementType(): ?string
    {
        return $this->elementType;
    }

    public function setElementType(?string $elementType): self
    {
        $this->elementType = $elementType;

        return $this;
    }

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(?string $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getAttributed(): ?string
    {
        return $this->attributed;
    }

    public function setAttributed(?string $attributed): self
    {
        $this->attributed = $attributed;

        return $this;
    }

    public function getChildren(): ?string
    {
        return $this->children;
    }

    public function setChildren(?string $children): self
    {
        $this->children = $children;

        return $this;
    }

    public function getAttributes(): ?string
    {
        return $this->attributes;
    }

    public function setAttributes(?string $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }


}

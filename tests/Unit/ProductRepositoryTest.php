<?php

namespace App\Tests;

use App\Entity\Product;
use App\Repository\ProductRepository;
use PHPUnit\Framework\TestCase;

final class ProductRepositoryTest extends TestCase
{
    public function testGetFullPrice(): void
    {
        $product = new Product();
        $product->setPrice(100);
        $product->setQty(5);

        $productRepository = $this->getMockBuilder(ProductRepository::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['find'])
            ->getMock();

        $productRepository->expects($this->any())
            ->method('find')
            ->willReturn($product);

        $this->assertEquals(500, $productRepository->getFullPrice(1));
    }
}
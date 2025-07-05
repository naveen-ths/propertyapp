<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InvestmentOpportunity;

class InvestmentOpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample investment opportunities for Mumbai
        InvestmentOpportunity::create([
            'title' => 'Premium Residences in Powai',
            'slug' => 'premium-residences-powai',
            'description' => 'Luxury residential project with modern amenities in the heart of Powai.',
            'location' => 'mumbai',
            'property_type' => 'Residential',
            'price_range' => '₹2.5Cr - ₹5Cr',
            'investment_rating' => 4.5,
            'developer_name' => 'Prestige Group',
            'contact_phone' => '+91 9876543210',
            'contact_email' => 'info@prestigegroup.com',
            'property_url' => 'https://example.com/property1',
            'sort_order' => 1,
            'status' => true,
            'meta_title' => 'Premium Residences in Powai - Investment Opportunity',
            'meta_description' => 'Luxury residential project with modern amenities in the heart of Powai.',
            'meta_keywords' => 'powai, mumbai, residential, luxury, investment'
        ]);

        InvestmentOpportunity::create([
            'title' => 'Commercial Hub in BKC',
            'slug' => 'commercial-hub-bkc',
            'description' => 'Prime commercial space in Bandra Kurla Complex with excellent connectivity.',
            'location' => 'mumbai',
            'property_type' => 'Commercial',
            'price_range' => '₹1.2Cr - ₹3Cr',
            'investment_rating' => 5.0,
            'developer_name' => 'Lodha Group',
            'contact_phone' => '+91 9876543211',
            'contact_email' => 'contact@lodhagroup.com',
            'property_url' => 'https://example.com/property2',
            'sort_order' => 2,
            'status' => true,
            'meta_title' => 'Commercial Hub in BKC - Investment Opportunity',
            'meta_description' => 'Prime commercial space in Bandra Kurla Complex with excellent connectivity.',
            'meta_keywords' => 'bkc, mumbai, commercial, office, investment'
        ]);

        // Create sample investment opportunities for Pune
        InvestmentOpportunity::create([
            'title' => 'Modern Apartments in Hinjewadi',
            'slug' => 'modern-apartments-hinjewadi',
            'description' => 'Contemporary residential complex in Pune\'s IT hub.',
            'location' => 'pune',
            'property_type' => 'Residential',
            'price_range' => '₹80L - ₹1.5Cr',
            'investment_rating' => 4.0,
            'developer_name' => 'Sobha Limited',
            'contact_phone' => '+91 9876543212',
            'contact_email' => 'info@sobha.com',
            'property_url' => 'https://example.com/property3',
            'sort_order' => 3,
            'status' => true,
            'meta_title' => 'Modern Apartments in Hinjewadi - Investment Opportunity',
            'meta_description' => 'Contemporary residential complex in Pune\'s IT hub.',
            'meta_keywords' => 'hinjewadi, pune, residential, apartments, investment'
        ]);

        // Create sample investment opportunities for Bangalore
        InvestmentOpportunity::create([
            'title' => 'Tech Park Adjacent Homes',
            'slug' => 'tech-park-adjacent-homes',
            'description' => 'Residential project near major tech parks in Bangalore.',
            'location' => 'bangalore',
            'property_type' => 'Residential',
            'price_range' => '₹1Cr - ₹2.5Cr',
            'investment_rating' => 4.5,
            'developer_name' => 'Brigade Group',
            'contact_phone' => '+91 9876543213',
            'contact_email' => 'info@brigadegroup.com',
            'property_url' => 'https://example.com/property4',
            'sort_order' => 4,
            'status' => true,
            'meta_title' => 'Tech Park Adjacent Homes - Investment Opportunity',
            'meta_description' => 'Residential project near major tech parks in Bangalore.',
            'meta_keywords' => 'bangalore, tech park, residential, investment'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccomodationLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = ([
            ([
                "data_id"   => 1,
                "source_name"   => "Traveloka",
                "url"   => "https://www.traveloka.com/id-id/hotel/detail?spec=01-11-2023.02-11-2023.1.1.HOTEL.2000000209274.ASTON%20Cirebon%20Hotel%20%26%20Convention%20Center.2&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxfjiOGz6oXLTucMvN0%2BgQ3yZPvZcoHwUFNN%2BZpcr%2F%2FNa8o9ElfN8zOYhzzZeg0X586laFpeUViPi9rxDtyhGsDWhNl%2BxRa8wsdW01IvEWeildVo7nbHxIWcXPVNGysXwP9P%2F6jQTjnyKeTv%2ByqYmxSenRKFEfSHS0XO3kZfZPEEhT4qTyZ4NnGlioFk6ay4RXlsebEjOdYqJCyZZoDYIjPgQTZJJU7x7PDv%2BH1NN%2BU7%2Fn8QCDcMZPMvX4nWfxa3MY%2Bk28ILHsNwZ6G%2FMJzlyU7j8qFiQP%2F6twOHxn%2B6EJsWd3l3ySG7Noz64MEpNw6bLmXiPuEYcpdYfQy062cy6n%2BNBa8wP%2Fklg%2BEySx%2B%2BfNqDfMsi4qyKjapz8T4kT77CHkrX7Crrf7UBbktAeGixODei%2FNdx2RuCUEGmeMi6DAJSTTai4UKGMrEemWlm%2FtVYQKI1lMuX%2BRaPNcBUAvSnVpp3982X8ufymNCG%2Bvqv3rBuUa%2BDAlSlNPC7rHF8TsYmOTADU69%2B%2B%2Fol8yLJTHHQhvr%2Bf5O5wjhPZDddaEMD1lhgrNFX59TpZvCV9M4rSDCIHqoFDFRnsCphC6IUw%3D%22%7D&loginPromo=1&prevSearchId=1781275407651206996",
            ]),
            ([
                "data_id"   => 2,
                "source_name"   => "Traveloka",
                "url"   => "https://www.traveloka.com/id-id/hotel/detail?spec=01-11-2023.02-11-2023.1.1.HOTEL.3000010015654.Verse%20Hotel%20Cirebon.2&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU%2B0DXZ%2BT%2Bqw8uON7NhQf%2Ft5M0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxfjiOGz6oXLTucMvN0%2BgQ3yZPvZcoHwUFNN%2BZpcr%2F%2FNa8o9ElfN8zOYhzzZeg0X586laFpeUViPi9rxCJAa7W2Eeyi63MRd1p%2FxrNmhLDdV0WLeT%2FFKfQ0QL8LH02Dvlx%2F8PjYogEE5yzx6g6yOKyKeIDf7jO3GM45O1o1hmSkmz3HiZNSbS8gXb3CDW9nmlhkqLKa4lLkAkZpAGTcOmy5l4j7hGHKXWH0MtOTunPPlSk35eJdswvqhTp4fvnzag3zLIuKsio2qc%2FE%2BLJ0GtLHBjIyioFHRQHjGdXjTE%2FGsBKQXKjBtgZDhjE4C5zlhNP3bbD3EkRDMDBFQ8zMdFMDbeW1h2pAbyBW7EazHaEIke4gLKBu993M9y78xj%2F1r5oS%2BOwbxdgGx0rugjIWGULNNq2kq01LGJS4cUOsmVHb%2FDz2eMMIR3KhBjDXyMn1qdaM1viWqCGwU1siX1ZIegdsZIo1sjlWnbsTcjefS6Pj3RtIU6lROCEB6QAgiS1WJabPNVEO7waQAXksTDyQHUY2wqyAfRzb44KOjG0poBVHSJ1fq5iJGt%2Fs2ROyG2r1yuKaZ4GSAmh5BaCjz8%3D%22%7D&loginPromo=1&prevSearchId=1781275407651206996",
            ]),
            ([
                "data_id"   => 3,
                "source_name"   => "Traveloka",
                "url"   => "https://www.traveloka.com/id-id/hotel/detail?spec=01-11-2023.02-11-2023.1.1.HOTEL.1000000497772.BATIQA%20Hotel%20Cirebon.2&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxfjiOGz6oXLTucMvN0%2BgQ3yZPvZcoHwUFNN%2BZpcr%2F%2FNa8o9ElfN8zOYhzzZeg0X586laFpeUViPi9rxAEqhYb5T7%2FLq9Da9SrBNXmmhLDdV0WLeT%2FFKfQ0QL8LH02Dvlx%2F8PjYogEE5yzx6g6yOKyKeIDf7jO3GM45O1o1hmSkmz3HiZNSbS8gXb3CDW9nmlhkqLKa4lLkAkZpAGTcOmy5l4j7hGHKXWH0MtOTunPPlSk35eJdswvqhTp4fvnzag3zLIuKsio2qc%2FE%2BLJ0GtLHBjIyioFHRQHjGdXjTE%2FGsBKQXKjBtgZDhjE4C5zlhNP3bbD3EkRDMDBFQ8zMdFMDbeW1h2pAbyBW7EazHaEIke4gLKBu993M9y78xj%2F1r5oS%2BOwbxdgGx0rugjIWGULNNq2kq01LGJS4cUOsmVHb%2FDz2eMMIR3KhBjDXyMn1qdaM1viWqCGwU1siX1ZIegdsZIo1sjlWnbsTcjefS6Pj3RtIU6lROCEB6QAgiS1WJabPNVEO7waQAXksTDyQHUY2wqyAfRzb44KOjG0poBVHSJ1fq5iJGt%2Fs2ROyG2r1yuKaZ4GSAmh5BaCjz8%3D%22%7D&loginPromo=1&prevSearchId=1781275407651206996",
            ]),
            ([
                "data_id"   => 4,
                "source_name"   => "Traveloka",
                "url"   => "https://www.traveloka.com/id-id/hotel/detail?spec=01-11-2023.02-11-2023.1.1.HOTEL.3000010003751.Cordela%20Hotel%20Cirebon.2&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxfjiOGz6oXLTucMvN0%2BgQ3yZPvZcoHwUFNN%2BZpcr%2F%2FNa8o9ElfN8zOYhzzZeg0X586laFpeUViPi9rxA%2BvFdTwYsd9YW%2BWs9hVaVDmhLDdV0WLeT%2FFKfQ0QL8LH02Dvlx%2F8PjYogEE5yzx6g6yOKyKeIDf7jO3GM45O1o1hmSkmz3HiZNSbS8gXb3CDW9nmlhkqLKa4lLkAkZpAGTcOmy5l4j7hGHKXWH0MtOTunPPlSk35eJdswvqhTp4fvnzag3zLIuKsio2qc%2FE%2BLJ0GtLHBjIyioFHRQHjGdXjTE%2FGsBKQXKjBtgZDhjE4C5zlhNP3bbD3EkRDMDBFQ8zMdFMDbeW1h2pAbyBW7EazHaEIke4gLKBu993M9y78xj%2F1r5oS%2BOwbxdgGx0rugjIWGULNNq2kq01LGJS4cUOsmVHb%2FDz2eMMIR3KhBjDXyMn1qdaM1viWqCGwU1siX1ZIegdsZIo1sjlWnbsTcjefS6Pj3RtIU6lROCEB6QAgiS1WJabPNVEO7waQAXksTDyQHUY2wqyAfRzb44KOjG0poBVHSJ1fq5iJGt%2Fs2ROyG2r1yuKaZ4GSAmh5BaCjz8%3D%22%7D&loginPromo=1&prevSearchId=1781275407651206996",
            ]),
            ([
                "data_id"   => 5,
                "source_name"   => "Traveloka",
                "url"   => "https://www.traveloka.com/id-id/hotel/detail?spec=01-11-2023.02-11-2023.1.1.HOTEL.523646.Swiss-Belhotel%20Cirebon.2&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxfjiOGz6oXLTucMvN0%2BgQ3yZPvZcoHwUFNN%2BZpcr%2F%2FNa8o9ElfN8zOYhzzZeg0X586laFpeUViPi9rxCn6e0bdHC0S6An6RClIk6nmhLDdV0WLeT%2FFKfQ0QL8LH02Dvlx%2F8PjYogEE5yzx6g6yOKyKeIDf7jO3GM45O1o1hmSkmz3HiZNSbS8gXb3CDW9nmlhkqLKa4lLkAkZpAGTcOmy5l4j7hGHKXWH0MtOTunPPlSk35eJdswvqhTp4fvnzag3zLIuKsio2qc%2FE%2BLJ0GtLHBjIyioFHRQHjGdXjTE%2FGsBKQXKjBtgZDhjE4C5zlhNP3bbD3EkRDMDBFQ8zMdFMDbeW1h2pAbyBW7EazHaEIke4gLKBu993M9y78xj%2F1r5oS%2BOwbxdgGx0rugjIWGULNNq2kq01LGJS4cUOsmVHb%2FDz2eMMIR3KhBjDXyMn1qdaM1viWqCGwU1siX1ZIegdsZIo1sjlWnbsTcjefS6Pj3RtIU6lROCEB6QAgiS1WJabPNVEO7waQAXksTDyQHUY2wqyAfRzb44KOjG0poBVHSJ1fq5iJGt%2Fs2ROyG2r1yuKaZ4GSAmh5BaCjz8%3D%22%7D&loginPromo=1&prevSearchId=1781275407651206996",
            ]),
            ([
                "data_id"   => 6,
                "source_name"   => "Traveloka",
                "url"   => "https://www.traveloka.com/id-id/hotel/detail?spec=01-11-2023.02-11-2023.1.1.HOTEL.3000010001262.Grage%20Hotel%20Cirebon.2&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU%2B0DXZ%2BT%2Bqw8uON7NhQf%2Ft5M0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxfjiOGz6oXLTucMvN0%2BgQ3yZPvZcoHwUFNN%2BZpcr%2F%2FNa8o9ElfN8zOYhzzZeg0X586laFpeUViPi9rxAHAEyRR3bOJzsNKJKo6oUMmhLDdV0WLeT%2FFKfQ0QL8LH02Dvlx%2F8PjYogEE5yzx6g6yOKyKeIDf7jO3GM45O1o1hmSkmz3HiZNSbS8gXb3CDW9nmlhkqLKa4lLkAkZpAGTcOmy5l4j7hGHKXWH0MtOTunPPlSk35eJdswvqhTp4fvnzag3zLIuKsio2qc%2FE%2BLJ0GtLHBjIyioFHRQHjGdXjTE%2FGsBKQXKjBtgZDhjE4C5zlhNP3bbD3EkRDMDBFQ8zMdFMDbeW1h2pAbyBW7EazHaEIke4gLKBu993M9y78xj%2F1r5oS%2BOwbxdgGx0rugjIWGULNNq2kq01LGJS4cUOsmVHb%2FDz2eMMIR3KhBjDXyMn1qdaM1viWqCGwU1siX1ZIegdsZIo1sjlWnbsTcjefS6Pj3RtIU6lROCEB6QAgiS1WJabPNVEO7waQAXksTDyQHUY2wqyAfRzb44KOjG0poBVHSJ1fq5iJGt%2Fs2ROyG2r1yuKaZ4GSAmh5BaCjz8%3D%22%7D&loginPromo=1&prevSearchId=1781274127947027842",
            ]),
        ]);

        DB::table('accomodation_links')->insert($links);
    }
}

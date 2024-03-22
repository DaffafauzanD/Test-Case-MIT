import java.util.HashMap;
import java.util.Scanner;
public class MenghitungTotal {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int harga = 0;
        int indomie = 3000, telur = 1500, kopi = 1000, susu = 2500;
        char ulang;
        do {
            System.out.println("Selamat datang di Toko A");
            System.out.println("1. Indomie");
            System.out.println("2. Telur");
            System.out.println("3. Kopi");
            System.out.println("4. Susu");
            System.out.println("5. checkout");
            System.out.print("pilih barang : ");
            int pilihan = sc.nextInt();
            System.out.print("jumlah : ");
            int jumlah = sc.nextInt();
            switch (pilihan) {
                case 1:
                    harga = harga + jumlah * indomie;
                    break;
                case 2:
                    harga = harga + jumlah * telur;
                    break;
                case 3:
                    harga = harga + jumlah * kopi;
                    break;
                case 4:
                    harga = harga + jumlah * susu;
                default:
                    break;
            }
            System.out.println("total belanja : "+harga); 
            System.out.print("Lanjut memilih? (y/t) : ");
            ulang = sc.next().charAt(0);
        } while (ulang != 't');
           System.out.println("sub total belanja : "+harga); 
    }
    
}
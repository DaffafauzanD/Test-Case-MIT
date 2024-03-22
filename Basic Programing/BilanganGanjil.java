import java.util.Scanner;
public class BilanganGanjil {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int awal = 0;
        System.out.println("Masukan Nilai N : ");
        int akhir = sc.nextInt();
        for(int i=awal; i<=akhir; i++){
            if (i%2!=0)
            System.out.println(i+" ");
        }
    }
}

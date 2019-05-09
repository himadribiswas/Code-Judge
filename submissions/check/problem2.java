import java.util.*;
class problem2
{
    public static void main(String args[])
    {
        Scanner sc=new Scanner(System.in);
        int m=sc.nextInt();
        int d=sc.nextInt();
        int y=sc.nextInt();
        int a[]={31,28,31,30,31,30,31,31,30,31,30,31};
        if((y % 4 == 0) && (y % 100 != 0) || (y % 400 == 0))
        a[1]=29;
        int s=0;
        for(int i=0;i<m-1;i++)
        {
        s=s+a[i];
        }  
        System.out.println(s+d);
    }
}
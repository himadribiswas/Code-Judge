import java.util.*;
class problem3
{
    public static void main(String args[])
    {
        int sum=0;
        int sum1=0;
        Scanner sc=new Scanner(System.in);
        //System.out.println("Enter a number");
        int m=sc.nextInt();
        if(m>2 && m<10)
        {   int m1[][]=new int[m][m];
            int k1;
            int suml=0;int sumr=0;
          //  System.out.println("Enter "+(m*m)+" numbers");
            for(int i=0;i<m;i++)
            {
                for(int j=0;j<m;j++)
                m1[i][j]=sc.nextInt();
            }
              for(int i=0;i<m;i++)
            { suml=suml+m1[i][i];
            }
           // System.out.println(suml);
                k1=0;
               int k2=m-1;
            while(k1!=m)
            {
                sumr=sumr+m1[k1][k2];
                k1=k1+1;
                k2=k2-1;
            }
           // System.out.println(sumr);
            if(suml>sumr)
           System.out.println(suml);
          else
            System.out.println(sumr);
        }
        else
        System.out.println("SIZE OUT OF RANGE");
    }
}
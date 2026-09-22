#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int n;
    cin >> n; cin.ignore();
    for (int i = 0; i < n; i++) {
        string company;
        getline(cin, company);
    }
    int a;
    cin >> a; cin.ignore();
    for (int i = 0; i < a; i++) {
        string attack;
        getline(cin, attack);
    }
    for (int i = 0; i < n; i++) {

        // Write an answer using cout. DON'T FORGET THE "<< endl"
        // To debug: cerr << "Debug messages..." << endl;

        cout << "company:status" << endl;
    }
}
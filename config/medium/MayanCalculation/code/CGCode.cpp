#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int l;
    int h;
    cin >> l >> h; cin.ignore();
    for (int i = 0; i < h; i++) {
        string numeral;
        cin >> numeral; cin.ignore();
    }
    int s1;
    cin >> s1; cin.ignore();
    for (int i = 0; i < s1; i++) {
        string num_1line;
        cin >> num_1line; cin.ignore();
    }
    int s2;
    cin >> s2; cin.ignore();
    for (int i = 0; i < s2; i++) {
        string num_2line;
        cin >> num_2line; cin.ignore();
    }
    string operation;
    cin >> operation; cin.ignore();

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "result" << endl;
}